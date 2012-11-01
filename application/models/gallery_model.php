<?php
class Gallery_model extends CI_Model {
	
	var $gallery_path;
	var $gallery_path_url;
	
	function Gallery_model() {
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../img/gallery/');
		$this->gallery_path_url = base_url().'img/gallery/';
		
	}
	
	function do_upload() {
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		//---upload url to database	begins
		$insert_data = array(
                    'name' => $image_data['file_name'],
                    'path' => $image_data['full_path'],
                    'thumb_path'=> $image_data['file_path'] . 'thumbs/'. $image_data['file_name']
                     );

       $this->db->insert('igallery', $insert_data);//load array to database 
		//---upload url to database ends
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width' => 150,
			'height' => 100
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
	}

	
	function get_images() {
		$images = array();
		//get all the images path from the database
		$this->db->select('path');
		$db_paths = $this->db->get('igallery');
		$i = 0;
		foreach ($db_paths->result_array() as $row)
		{
			//$row = end($row); //end() gets the last elelemnt in the array
		
		//get remove all characters before 
		//http://php.net/manual/en/function.strrpos.php
	
		//$path = strrpos($db_paths , "img");
		//$relativepath = substr($db_paths, 0, 100);
		
		//$url = base_url() . $relativepath;
		//echo $url;
		//<img src="<?php echo $url //?/>">
		
			//$path = strstr($row['path'] , "img");
			$path = strrpos($row['path'], "img");
			
			$relativepath = substr($row['path'], $path); //substr(string_we_are_cutting, where_to_start)
		
			$image_url = base_url() .$relativepath;
			$thumb_url = str_replace("gallery/", "gallery/thumbs/", $image_url);//replace 
			
			$images[$i]['thumb'] = $thumb_url;
			$images[$i]['full'] = $image_url;
			$i++;
			
			//echo '<img src="' . $thumb_url . '" alt="' . $thumb_url . '" />';		
		}
		return $images;
				
/*
Code for getting image url from the local harddrive		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
			
		}

	$photos = $this->db->get('igallery'); // Retrieve photos from DB
    $photos = $photos->result_array();
	

    foreach($photos as $photo) {
     //   echo '<img src="' . $photo['url'] . '" alt="' . $photo['alt'] . '" />';
    }
	
		
		
		//return $images;
		
	}
	*/
	

	
	
}

}
