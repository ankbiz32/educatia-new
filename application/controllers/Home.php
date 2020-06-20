<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{
		$banners=$this->fetch->getInfo('banners');
		$categories=$this->fetch->getInfoLim('categories','cat_id', '6');
		$courses=$this->fetch->getCoursesLim('6');
		$partners=$this->fetch->getInfo('partners');
		$events=$this->fetch->getInfoLim('events','id', '6');
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['banners'=>$banners,
								'categories'=>$categories,
								'courses'=>$courses,
								'partners'=>$partners,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'events'=> $events,
								'title'=> 'Home'
								]
							);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function about()
	{
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'About'
								]
							);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function training()
	{
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Training'
								]
							);
		$this->load->view('training');
		$this->load->view('footer');
	}

	public function contact()
	{
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Contact'
								]
							);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	public function gallery()
	{
		$gallery=$this->fetch->getInfo('gallery');
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['gallery'=>$gallery,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Gallery'
								]
							);
		$this->load->view('gallery');
		$this->load->view('footer');
	}

	public function categories()
	{
		$categories=$this->fetch->getInfo('categories');
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['categories'=>$categories,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Categories'
								]
							);
		$this->load->view('categories');
		$this->load->view('footer');
	}

	public function courses()
	{
		$courses=$this->fetch->getCourses();
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['courses'=>$courses,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Courses'
								]
							);
		$this->load->view('courses');
		$this->load->view('footer');
	}

	public function coursesByCat($id)
	{
		$courses=$this->fetch->getCoursesByCat($id);
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['courses'=>$courses,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Category'
								]
							);
		$this->load->view('courses');
		$this->load->view('footer');
	}

	public function courseDetail($id)
	{
		$course=$this->fetch->getCourseById($id);
		$courses=$this->fetch->getCoursesLim('3');
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['course'=>$course,
								'courses'=>$courses,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> $course->slug
								]
							);
		$this->load->view('course-details');
		$this->load->view('footer');
	}

	public function news()
	{
		$events=$this->fetch->getInfoByOrder('events','id');
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['events'=>$events,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'News & events'
								]
							);
		$this->load->view('news');
		$this->load->view('footer');
	}

	public function newsDetail($id)
	{
		$event=$this->fetch->getInfoById($id,'events');
		$events=$this->fetch->getInfoLim('events','id','4');
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['event'=>$event,
								'events'=>$events,
								'web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> $event->slug
								]
							);
		$this->load->view('news-details');
		$this->load->view('footer');
	}

	public function privacy()
	{
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Privacy Policy'
								]
							);
		$this->load->view('policies');
		$this->load->view('footer');
	}

	
	public function Mail($for)
	{ 
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		if($this->form_validation->run() == true){
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$message=$this->input->post('message');
			$guest_email=$this->input->post('email');
			
			$mail_arr = $this->fetch->getWebProfile();
			$landing_mail = $mail_arr->email;
			
			$to=$landing_mail;
			$msg ="You have a new enquiry from- \n\r Name:".$name.".\n\r Phone:".$phone."\n\r E-mail:".$guest_email."\n\r Purpose:".$message;
			$subject = "Educatia - New Enquiry";
			$headers = "From:" . $name;

			mail($to, $subject, $msg, $headers);
			
			$this->load->model('AddModel','save');
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$data['purpose']=$for;
			$status= $this->save->saveEnquiry($data);

			if($status){
				$this->session->set_flashdata('success','Mail Sent!  We will connect with you soon.' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error sending mail !');
				redirect('Home');
			}
		}
		else{
			$err=trim(strip_tags(validation_errors()));
			$this->session->set_flashdata('failed',$err);
			redirect('Home');
		}
	}

	public function Subscribe()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		if($this->form_validation->run() == true){
			$guest_email=$this->input->post('email');
			
			$mail_arr = $this->fetch->getWebProfile();
			$landing_mail = $mail_arr->email;
			
			$to=$landing_mail;
			$msg ="You have a new Subscription from- \n\r E-mail:".$guest_email;
			$subject = "Educatia- New Subscription";
			$headers = "From:" . $guest_email;
			mail($to, $subject, $msg, $headers);
			$this->load->model('AddModel','save');
			$data=$this->input->post();
			$data['date']=date('Y-m-d');
			$status= $this->save->saveInfo($data, 'subscriptions');
			if($status){
				$this->session->set_flashdata('success','Subscribed !' );
				redirect('Home');
			}
			else{
				$this->session->set_flashdata('failed','Error !');
				redirect('Home');
			}
		}
		else{
			$err=trim(strip_tags(validation_errors()));
			$this->session->set_flashdata('failed',$err);
			redirect('Home');
		}
	}

}
