<?php
class Gallery extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	
	function index() {
	

		$this->load->model('Gallery_model');

		
		if ($this->input->post('upload')) {
			$this->Gallery_model->do_upload();
		}
		
		$data['images'] = $this->Gallery_model->get_images();
		
		$this->load->view('view_gallery', $data);
		
	}
	
}
