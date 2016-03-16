<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webmaster extends CI_Controller {

	public function index()
	{
		$data['mainContent'] = 'admin/webmaster/index';
		$this->load->view('admin/template/layout', $data);
	}

	public function add()
	{
		$data['mainContent'] = 'admin/webmaster/add';
		$this->load->view('admin/template/layout', $data);		
	}

	public function edit()
	{
		$data['mainContent'] = 'admin/webmaster/edit';
		$this->load->view('admin/template/layout', $data);

	}
}
