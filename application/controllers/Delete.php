<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
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



}
