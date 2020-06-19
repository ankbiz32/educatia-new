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
		$courses=$this->fetch->getCoursesLim();
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


}
