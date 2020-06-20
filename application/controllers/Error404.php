<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
		$gallery=$this->fetch->getInfoLim('gallery','id', '6');
		$feedbacks=$this->fetch->getInfo('feedbacks','id', '6');
		$web=$this->fetch->getWebProfile();
		$this->load->view('header',['web'=>$web,
								'feedbacks'=>$feedbacks,
								'gallery'=>$gallery,
								'title'=> 'Error ! 404 page not found.'
								]
							);
		$this->load->view('errors/html/custom_404');
		$this->load->view('footer');
	}
}
