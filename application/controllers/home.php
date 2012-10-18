<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Home extends CI_Controller
{
<<<<<<< HEAD
	/* What is this for? Is it from an old tutorial?
=======
>>>>>>> f6021d7a1552ecfb95e796163e68047ca03ad4ce
	function __construct()
	{
		parent::__construct();
	}
<<<<<<< HEAD
	*/
=======

>>>>>>> f6021d7a1552ecfb95e796163e68047ca03ad4ce
	public function index()
	{
		$data = array('title' => 'homepage', 'main_content' => 'home_v' );
		$this->load->view('template', $data);
	}

}

