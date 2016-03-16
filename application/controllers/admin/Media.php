<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function index()
	{
		$data['mainContent'] = 'admin/media/index';
		$this->load->view('admin/template/layout', $data);
	}

	public function add()
	{
		$data['mainContent'] = 'admin/media/add';
		$this->load->view('admin/template/layout', $data);		
	}

	public function edit()
	{
		$data['mainContent'] = 'admin/media/edit';
		$this->load->view('admin/template/layout', $data);

	}
}
