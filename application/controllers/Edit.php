<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {

        function __construct()
        {
            parent:: __construct();
            $this->redirectIfNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('EditModel','edit');
        }

        public function AdBanner($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/AdBanners');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $ad= $this->fetch->getInfoById($id,'ads');
                    $path= 'assets/images/'.$ad->img_src;
                    $status= $this->edit->updateInfo($data, $id, 'ads');
                    if($status){
                        unlink($path);
                        $this->session->set_flashdata('success','Ad Banner Updated !');
                        redirect('Admin/AdBanners');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/AdBanners');
                    }
                }
            }
            else{
                $this->session->set_flashdata('failed','No File Chosen !');
                redirect('Admin/AdBanners');
            }
        }

        public function Event($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Event');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'events');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'events');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Event Updated !');
                redirect('Admin/Events');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Events');
            }
        }

        public function KnowUs($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateLink($data, $id);
            if($status){
                $this->session->set_flashdata('success','Link Updated !');
                redirect('Admin/KnowUs');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/KnowUs');
            }
        }

        public function Feedback($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Feedbacks');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'feedbacks');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'feedbacks');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Feedback Updated !');
                redirect('Admin/Feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Feedbacks');
            }
        }

        public function Gallery($id)
        {
            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Gallery');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('img_src'=>$imagename);
                    $d= $this->fetch->getInfoById($id,'gallery');
                    $path= 'assets/images/'.$d->img_src;
                    $status= $this->edit->updateInfo($data,$id, 'gallery');
                    if($status){
                        unlink($path);
                        $this->session->set_flashdata('success','Image Updated!' );
                        redirect('Admin/Gallery');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Gallery');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed','No image selected !');
                redirect('Admin/Gallery');
            } 
        }





        public function webProfile()
        {
            $data=$this->input->post();
            $status= $this->edit->updateWebProfile($data);

            if($status){
                $this->session->set_flashdata('success','Web Profile Updated !');
                redirect('Admin/webProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/webProfile');
            }
        }

        public function enqStatus($id)
        {
            $status= $this->edit->updateEnqStatus($id);
            if($status){
                redirect('Admin');
            }
            else{
                redirect('Admin');
            }
        }

        public function adminProfile($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateAdminProfile($data,$id);
            $user=$this->fetch->getAdminProfile();
            $this->session->set_userdata(['user' =>  $user]);

            if($status){
                $this->session->set_flashdata('success','Admin Panel Profile Updated !');
                redirect('Admin/adminProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/adminProfile');
            }
        }
        

}
