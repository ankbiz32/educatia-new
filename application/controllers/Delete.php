<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }

        public function Banner($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'banners');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'banners');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Banner Deleted!');
                redirect('Admin/Banners');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Banners');
            }
        }

        // Delete Feedbacks
        public function Feedback($id)
        {
            $d= $this->fetch->getInfoById($id, 'feedbacks');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'feedbacks');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Feedback Deleted!');
                redirect('Admin/Feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Feedbacks');
            }
        }
        

        public function Category($id)
        {
            $d= $this->fetch->getInfoParams('courses', 'cat_id', $id);
            $status= $this->delete->deleteInfoCol('cat_id', $id, 'courses');
            if($status){
                $status= $this->delete->deleteInfoCol('cat_id', $id, 'categories');
                foreach($d as $dd){
                    $path= 'assets/images/'.$dd->img_src;
                    unlink($path);
                }
                $this->session->set_flashdata('success','Category Deleted!');
                redirect('Admin/Categories');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Categories');
            }
        }
        
        // Delete Event
        public function Event($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'events');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'events');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Event Deleted!');
                redirect('Admin/Events');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Events');
            }
        }

        public function Course($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'courses');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'courses');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Course Deleted!');
                redirect('Admin/Courses');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Courses');
            }
        }

        // Delete Gallery
        public function Gallery($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'gallery');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'gallery');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Image Deleted!');
                redirect('Admin/Gallery');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Gallery');
            }
        }

        public function Partner($id)
        {
            
            $d= $this->fetch->getInfoById($id, 'partners');
            $path= 'assets/images/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'partners');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Image Deleted!');
                redirect('Admin/Partners');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Partners');
            }
        }



}
