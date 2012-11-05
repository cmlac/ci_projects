<?php
class Gallery extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper('form');
		$this -> load -> library('pagination');
		$this -> load -> library('table');
		$this -> load -> model('Gallery_model');

	}

	function index() {

		if ($this -> input -> post('upload')) {
			$this -> Gallery_model -> do_upload();
		}

		$data['images'] = $this -> Gallery_model -> get_images();
		//the image url, thumb url and name of image file that are stored in database are packed into an array

		/*setting config for pagination
		 $config['base_url'] = base_url().'/gallery/index';
		 $config['total_rows'] = $this->db->get('igallery')->num_rows();
		 $config['per_page'] = 3;
		 $config['num_links'] = 10;

		 $this->pagination->initialize($config);

		 $data['records'] = $this->db->get('igallery', $config['per_page'], $this->uri->segment(3));
		 pagination setting ends */

		$this -> load -> view('view_gallery', $data);
		//the array is passed to view_gallery page

	}

	function upload_image() {
		$this -> load -> view('upload_image');
	}

	function delete_image($id) {
		$this -> Gallery_model -> delete($id);
		redirect('gallery', refresh);
	}

	function delete($id) {

		$delete = $this -> input -> post('delete');
		for ($i = 0; $i < count($delete); $i++) {
			$this -> db -> where('id', $delete[$i]);
			$this -> db -> delete('igallery');
		}
	}

}
