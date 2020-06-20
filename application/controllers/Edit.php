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


        public function Banner($id)
        {
            $data=$this->input->post();

            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 1100
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Banners');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'banners');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'banners');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Banner Updated !');
                redirect('Admin/Banners');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Banners');
            }
        }

        public function Event($id)
        {
            $data=$this->input->post();
            $data['slug']=$this->generate_url_slug($this->input->post('heading'),'events');
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
                $this->session->set_flashdata('success','Updated !');
                redirect('Admin/Events');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Events');
            }
        }

        public function Course($id)
        {
            $data=$this->input->post();
            $data['slug']=$this->generate_url_slug($this->input->post('name'),'courses');
            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 1100
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors() ) );
                    redirect('Admin/Courses');
                } 
                else {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'courses');
                    $path= 'assets/images/'.$d->img_src;
                }
            }

            $status= $this->edit->updateInfo($data, $id, 'courses');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Updated !');
                redirect('Admin/Courses');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Courses');
            }
        }

        public function Category($id)
        {
            $this->form_validation->set_rules('cat_name', 'Name', 'required');
            $this->form_validation->set_rules('cat_color', 'Color', 'required');
            $this->form_validation->set_rules('cat_img_src', 'Icon', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $status= $this->edit->updateInfoByCol($data, 'cat_id', $id, 'categories');

                if($status){
                    $this->session->set_flashdata('success','Category updated !' );
                    redirect('Admin/Categories');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Categories');
                }
                
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Categories');
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

        public function Partner($id)
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
                    redirect('Admin/Partners');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('img_src'=>$imagename);
                    $d= $this->fetch->getInfoById($id,'partners');
                    $path= 'assets/images/'.$d->img_src;
                    $status= $this->edit->updateInfo($data,$id, 'partners');
                    if($status){
                        unlink($path);
                        $this->session->set_flashdata('success','Image Updated!' );
                        redirect('Admin/Partners');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Partners');
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

        function generate_url_slug($string,$table,$field='slug',$key=NULL,$value=NULL){
            $t =& get_instance();
            $slug = url_title($string);
            $slug = strtolower($slug);
            $i = 0;
            $params = array ();
            $params[$field] = $slug;
            if($key)$params["$key !="] = $value; 
            while ($t->db->where($params)->get($table)->num_rows())
            {
                if (!preg_match ('/-{1}[0-9]+$/', $slug )){
                    $slug .= '-' . ++$i;
                }
                else{
                    $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
                }
                $params [$field] = $slug;
            }
                return $slug;
        }
        
        

}
