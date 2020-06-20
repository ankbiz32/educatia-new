<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
        }

        public function Banner()
        {
            $this->form_validation->set_rules('tagline', 'Tagline', 'required');
            $this->form_validation->set_rules('head', 'Description', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 1100
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Banners');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('tagline'=>$this->input->post('tagline'),
                            'head'=>$this->input->post('head'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'banners');

                    if($status){
                        $this->session->set_flashdata('success','New Banner added !' );
                        redirect('Admin/Banners');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Banners');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Banners');
            } 
        }

        public function Event()
        {
            $this->form_validation->set_rules('heading', 'Heading', 'required');
            $this->form_validation->set_rules('descr', 'Description', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 350
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Events');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('heading'=>$this->input->post('heading'),
                            'descr'=>$this->input->post('descr'),
                            'date'=>date('Y-m-d'),
                            'slug'=>$this->generate_url_slug($this->input->post('heading'),'events'),
                            'author'=>'Admin',
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'events');

                    if($status){
                        $this->session->set_flashdata('success','Added !' );
                        redirect('Admin/Events');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Events');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Events');
            } 
        }

        public function Course()
        {
            $this->form_validation->set_rules('name', 'Course name', 'required');
            $this->form_validation->set_rules('overview', 'Overview', 'required');
            $this->form_validation->set_rules('old_price', 'old price', 'required');
            $this->form_validation->set_rules('new_price', 'new price', 'required');
            $this->form_validation->set_rules('cat_id', 'Category', 'required');
            $this->form_validation->set_rules('lang', 'Language', 'required');
            $this->form_validation->set_rules('rating', 'Rating', 'required');
            $this->form_validation->set_rules('level', 'Skill level', 'required');
            if($this->form_validation->run() == true){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 1100
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/Courses');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=$this->input->post();
                    $data['img_src']=$imagename;
                    $data['slug']=$this->generate_url_slug($this->input->post('name'),'courses');
                    $status= $this->save->saveInfo($data, 'courses');

                    if($status){
                        $this->session->set_flashdata('success','Added !' );
                        redirect('Admin/Courses');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Courses');
                    }
                } 
            }
            else{
                $err=trim(strip_tags(validation_errors()));
                $this->session->set_flashdata('failed',$err);
                redirect('Admin/Courses');
            } 
        }

        public function Feedback()
        {
            $this->form_validation->set_rules('content', 'Feedback', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            if($this->form_validation->run() == true){
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
                    redirect('Admin/Feedbacks');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data=array('content'=>$this->input->post('content'),
                            'name'=>$this->input->post('name'),
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'feedbacks');

                    if($status){
                        $this->session->set_flashdata('success','New Feedback added !' );
                        redirect('Admin/Feedbacks');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/Feedbacks');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Feedbacks');
            } 
        }

        public function Category()
        {
            $this->form_validation->set_rules('cat_name', 'Name', 'required');
            $this->form_validation->set_rules('cat_color', 'Color', 'required');
            $this->form_validation->set_rules('cat_img_src', 'Icon', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $status= $this->save->saveInfo($data, 'categories');

                if($status){
                    $this->session->set_flashdata('success','New Category added !' );
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

        public function Gallery()
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
                    $status= $this->save->saveInfo($data, 'gallery');

                    if($status){
                        $this->session->set_flashdata('success','New Image added !' );
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

        public function Partner()
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
                    $status= $this->save->saveInfo($data, 'partners');

                    if($status){
                        $this->session->set_flashdata('success','New Image added !' );
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
                redirect('Admin/Partners');
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
