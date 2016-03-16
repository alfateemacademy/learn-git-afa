<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specification extends CI_Controller {

	public function add($product_id)
	{
		$this->load->model('product_model');
		$this->load->model('specification_model');

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
			$options = array(
				'product_id' => $this->input->post('product_id'),
				'create_date' => $this->input->post('inputDate'),
				'processor_type' => $this->input->post('inputProcessorType'),
				'processor_speed' => $this->input->post('inputProcessorSpeed'),
				'hard_drive_size' => $this->input->post('inputHarddriveSize'),
				'installed_ram' => $this->input->post('inputInstalledRam'),
				'screen_size' =>$this->input->post('inputScreenSize'),
				'camera' =>$this->input->post('inputCamera'),
				'color' =>$this->input->post('inputAvailableColor'),
				'operating_system' =>$this->input->post('inputOSPrimary'),
				'bluetooth' =>$this->input->post('inputBluetooth'),
				'wifi' =>$this->input->post('inputWifi'),
				'lan' =>$this->input->post('inputLan'),
				'modem' =>$this->input->post('inputModem'),
			); 
			$this->specification_model->create($options);
			redirect('/admin/product','refresh');
		}

		$data['product'] = $this->product_model->get_by($product_id);
		$data['mainContent'] = "/admin/product/add_specification";
		$this->load->view('/admin/template/layout', $data);	
	}

	public function edit($specification_id)
	{
		$this->load->model('specification_model');
		$this->load->model('product_model');

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$options = array(
				'create_date' => $this->input->post('inputDate'),
				'processor_type' => $this->input->post('inputProcessorType'),
				'processor_speed' => $this->input->post('inputProcessorSpeed'),
				'hard_drive_size' => $this->input->post('inputHarddriveSize'),
				'installed_ram' => $this->input->post('inputInstalledRam'),
				'screen_size' =>$this->input->post('inputScreenSize'),
				'camera' =>$this->input->post('inputCamera'),
				'color' =>$this->input->post('inputAvailableColor'),
				'operating_system' =>$this->input->post('inputOSPrimary'),
				'bluetooth' =>$this->input->post('inputBluetooth'),
				'wifi' =>$this->input->post('inputWifi'),
				'lan' =>$this->input->post('inputLan'),
				'modem' =>$this->input->post('inputModem'),
			); 
			$this->specification_model->update($options, $specification_id);
			redirect('/admin/product','refresh');
		}
		$data['specification'] = $this->specification_model->get_specification_by($specification_id);
		$data['mainContent'] = "/admin/product/edit_specification";
		$this->load->view('/admin/template/layout', $data);
	}
}
