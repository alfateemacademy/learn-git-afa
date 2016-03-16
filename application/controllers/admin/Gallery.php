<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

	public function index()
	{
		$data['mainContent'] = "/admin/gallery/index";
		$this->load->view('/admin/template/layout', $data);
	}

	public function add()
	{
		$this->load->library('upload');
		$this->load->model('gallery_model');

		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$userFile = array(
				'upload_path' => './uploads/gallery/',
				'allowed_types' => 'jpg|jpeg|png|gif',
				'encrypt_name' => TRUE,
			);

			$this->upload->initialize($userFile);
			if ($this->upload->do_upload('file')) 
			{
				$file = $this->upload->data();
				$options = [
				'product_id' => 1,
				'gallery_img' => $file['file_name']
			];
			$this->gallery_model->create($options);
			die();
			}
		}


		$data['mainContent'] = "/admin/product/add_gallery";
		$this->load->view('/admin/template/layout', $data);	
	}

	public function edit()
	{
		$data['mainContent'] = "/admin/gallery/edit";
		$this->load->view('/admin/template/layout', $data);
	}

}
