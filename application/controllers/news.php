<?php
class News extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	
	function index() {
	

		$this->load->model('news_model');

		
		$this->load->view('newsView');
		
	}
	
	
}
