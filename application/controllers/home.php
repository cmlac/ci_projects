<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Home extends CI_Controller
{
	/* What is this for? Is it from an old tutorial?
	function __construct()
	{
		parent::__construct();
	}
	*/
	public function index()
	{
		$data = array('title' => 'homepage', 'main_content' => 'home_v' );
		$this->load->view('template', $data);
	}

}

