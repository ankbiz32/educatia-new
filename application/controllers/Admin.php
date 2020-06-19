<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('GetModel','fetch');
                $this->redirectIfNotLoggedIn();
        }

        public function index()
        {
                $enq=$this->fetch->getEnquiries();
                $this->load->view('admin/adminheader',['enq' => $enq]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/dashboard'); 
                $this->load->view('admin/adminfooter');  
        }

        public function AdBanners()
        {
                $data=$this->fetch->getInfo('ads');
                $this->load->view('admin/adminheader',['ads' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adbanner'); 
                $this->load->view('admin/adminfooter');  
        }

        public function KnowUs()
        {
                $data=$this->fetch->getInfo('know_us');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/knowus'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Events()
        {
                $data=$this->fetch->getInfo('events');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/events'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Feedbacks()
        {
                $data=$this->fetch->getInfo('feedbacks');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/feedbacks'); 
                $this->load->view('admin/adminfooter');  
        }

        
        public function Gallery()
        {
                $data=$this->fetch->getInfo('gallery');
                $this->load->view('admin/adminheader',['data' => $data]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/gallery'); 
                $this->load->view('admin/adminfooter');  
        }

        public function webProfile()
        {
                $profile=$this->fetch->getWebProfile();
                $this->load->view('admin/adminheader', ['profile' => $profile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/webProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function adminProfile()
        {
                $admProfile=$this->fetch->getAdminProfile();
                $this->load->view('admin/adminheader', ['admProfile' => $admProfile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminProfile'); 
                $this->load->view('admin/adminfooter');  
        }


}
