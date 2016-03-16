<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function validate()
	{
		$this->load->model('member_model');

		$where = array(
			'email' => $this->input->post('inputEmail'), 
			'password' => $this->input->post('inputPassword')
		);
		$query = $this->member_model->validate_credentials($where);
		if ($query) 
		{
			$data = array(
				'fullname' => $query->fullname,
				'email' => $query->email,
				'member_id' => $query->id,
				'is_logged_in' => TRUE
			);

			$this->session->set_userdata($data);
			redirect('/admin/brand','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();		
	}
}
