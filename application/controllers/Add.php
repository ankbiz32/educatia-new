<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
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
                            'img_src'=>$imagename
                            );
                    $status= $this->save->saveInfo($data, 'events');

                    if($status){
                        $this->session->set_flashdata('success','New Event added !' );
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


        public function Mail()
        {
            $name=$this->input->post('name');
            $phone=$this->input->post('phone');
            $message=$this->input->post('message');
            $guest_email=$this->input->post('email');
            
            $mail_arr = $this->fetch->getWebProfile();
            $landing_mail = $mail_arr->email;
            
            $to=$landing_mail;
            $msg ="You have a new qnquiry from- \n\r Name:".$name.".\n\r Phone:".$phone."\n\r E-mail:".$guest_email."\n\r Purpose:".$message;
            $subject = "DigiKraft Social - New Enquiry";
            $headers = "From:" . $name;

            mail($to, $subject, $msg, $headers);
            
            $data=$this->input->post();
            $data['date']=date('Y-m-d');
            $status= $this->save->saveEnquiry($data);

            if($status){
                $this->session->set_flashdata('success','Mail Sent!  We will connect with you soon.' );
                redirect('Contact');
            }
            else{
                $this->session->set_flashdata('failed','Error sending mail !');
                redirect('Contact');
            }
        }

        public function Subscribe()
        {
            $guest_email=$this->input->post('email');
            
            $mail_arr = $this->fetch->getWebProfile();
            $landing_mail = $mail_arr->email;
            
            $to=$landing_mail;
            $msg ="You have a new Subscription from- \n\r E-mail:".$guest_email;
            $subject = "DigiKraft Social - New Subscription";
            $headers = "From:" . $guest_email;

            if(mail($to, $subject, $msg, $headers)){
                $this->session->set_flashdata('success','Subscribed !' );
                redirect('Home');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Home');
            }
        }


// --------------------------------------------------------- //

        public function Career()
        {
            $data=$this->input->post();
            $status= $this->save->saveCareer($data);

            if($status){
                $this->session->set_flashdata('success','New Career added !' );
                redirect('Admin/Careers');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Careers');
            }
        }

        public function Application()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'E-mail ID', 'required');
            $this->form_validation->set_rules('for_position', 'Position', 'required');
            if($this->form_validation->run() == true){
                $data=$this->input->post();

                $path ='assets/resumes/';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "pdf|doc|docx",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('resume')) {
                    $newstr=str_replace('<p>','',$this->upload->display_errors());
                    $err_str=str_replace('</p>','',$newstr);
                    $this->session->set_flashdata('failed',str_replace('<p>','',$err_str));
                    redirect('Career');
                } 
                else {
                    $docdata = $this->upload->data();
                    $docname = $docdata['file_name'];
                    $data['resume']=$docname;
                    $data['date']=date('Y-m-d');

                    $status= $this->save->saveApplication($data);

                    if($status){
                        $name=$data['name'];
                        $guest_email=$data['email'];
                        $position=$data['for_position'];
                        $mail_arr = $this->fetch->getWebProfile();
                        $to = $mail_arr->email;

                        $msg ="You have a new job application from- \n\r Name:".$name.".\n\r E-mail:".$guest_email."\n\r Applied for:".$position;
                        $subject = "DigiKraft Social - New job application";
                        $headers = "From:" . $name;

                        mail($to, $subject, $msg, $headers);
                        $this->session->set_flashdata('success','You have successfully applied for the job !' );
                        redirect('Career');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Career');
                    }
                }
            }
            else{
                $profile=$this->fetch->getWebProfile();
                $careers=$this->fetch->getCareers();
                $this->load->view('header',['profile'=>$profile,
                                            'careers'=>$careers,
                                            'form_data'=>$this->input->post(),
                                            'errors' => validation_errors()
                                            ] );
                $this->load->view('career');
                $this->load->view('footer');
            }
        }

        public function Blog()
        {
            // Image upload and saving name
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                "remove_spaces" => TRUE
            );
            $this->load->library('upload', $initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',$this->upload->display_errors());
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
            } 

            // searcing if author exists  & adding if it does not exist
            $author_string=$this->input->post('author');
            $author_exists=$this->fetch->search_string($author_string, 'blog_authors', 'author');
            if($author_exists){
                $author_id=$this->fetch->get_string_id($author_string, 'blog_authors', 'author');
            }
            else{
                $this->save->saveString($author_string, 'blog_authors', 'author');
                $author_id=$this->fetch->get_string_id($author_string, 'blog_authors', 'author');
            }

            // searcing if category exists  & adding if it does not exist
            $catg_string=$this->input->post('category');
            $catg_exists=$this->fetch->search_string($catg_string, 'blog_categories', 'category');
            if($catg_exists){
                $catg_id=$this->fetch->get_string_id($catg_string, 'blog_categories', 'category');
            }
            else{
                $this->save->saveString($catg_string, 'blog_categories', 'category');
                $catg_id=$this->fetch->get_string_id($catg_string, 'blog_categories', 'category');
            }


            $feat='0';
            if($this->input->post('featured')!=null){
                $feat='1';
            }
            $data=array('heading'=>$this->input->post('heading'),
                        'content'=>$this->input->post('content'),
                        'date'=>date('Y-m-d'),
                        'img'=>$imagename,
                        'featured'=>$feat,
                        'authors_id'=>$author_id,
                        'categories_id'=>$catg_id
                        );
            $status= $this->save->saveBlog($data);

            if($status){
                $this->session->set_flashdata('success','New Blog posted !' );
                redirect('Admin/Blog');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Blog');
            }
        }

}
