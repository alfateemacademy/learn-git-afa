<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber extends CI_Controller {

	public function index()
	{
		$this->load->model('subscriber_model');
		$data['title'] = "subscriber";
		$data['subscribers'] = $this->subscriber_model->get_all();
		$data['mainContent'] = 'admin/subscriber/index';
		$this->load->view('admin/template/layout', $data);
	}

	public function add()
	{
		$this->load->model('subscriber_model');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$options = array(
				'create_date' => $this->input->post('inputDate'), 
				'fullname' => $this->input->post('inputFullname'), 
				'email' => $this->input->post('inputEmail'), 
				'status' => 'Deactive', 
			);
			$this->subscriber_model->create($options);
			redirect('/admin/subscriber','refresh');
		}
		$data['mainContent'] = 'admin/subscriber/add';
		$this->load->view('admin/template/layout', $data);		
	}

	public function edit($subscriber_id = NULL)
	{

		$this->load->model('subscriber_model');
		
		$name  = $this->input->post('name');
        $value = $this->input->post('value');
        $new   = array(
            $name => $value
        );
        
        $this->subscriber_model->update($new, $this->input->post('pk'));
	}

	public function remove($subscriber_id)
	{
		$this->load->model('subscriber_model');
		
		$this->subscriber_model->delete($subscriber_id);
		redirect('/admin/subscriber','refresh');
	}

	public function status($subscriber_id)
	{
		$this->load->model('subscriber_model');

		$row = $this->subscriber_model->get_by($subscriber_id);
		$currentStatus = $row->status;

		$newStatus = ($currentStatus == 'Deactive') ? 'Active' : 'Deactive';
		$data = array(
			'status' => $newStatus, 
		);
		$this->subscriber_model->update($data, $subscriber_id);
		redirect('/admin/subscriber','refresh');
	}
}
