<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array('title' => 'homepage', 'main_content' => 'home_v' );
		$this->load->view('template', $data);
		
	
	}
	function verify()
	{
		if($this->input->post('username'))
		{
			$u = $this->input->post('username');
			$pw = $this->input->post('password');
			$this->Admin_model->verifyUser($u,$pw);
			if($_SESSION['member_id']> 2)
			{
				redirect('admin/dashboard', 'refresh');
			}
		}
		$data['main'] = 'login';
		$data['title'] = "Caulfield Malvern Little Athletics | Admin Login";
		// $data['navlist'] = $this->Admin_model->getAdminNav();
		$this->load->vars($data);
		$this->load->view('login', '$data');
		 
		 function logout()
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('home', 'refresh');
		}
		
		function login()
		{
		if($this->session->userdata('logged_in'))
		{
		  $session_data = $this->session->userdata('logged_in');
		  $data['username'] = $session_data['username'];
		  $this->load->view('home_view', $data);
		}
		else
		{
		  //If no session, redirect to login page
		  redirect('login', 'refresh');
		}
		}
	}
}
?>

