<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->model('product_model');
		$this->load->model('specification_model');
		$this->load->library('pagination');

		$config['base_url'] = base_url() . '/admin/product/index';
		$config['total_rows'] = $this->product_model->count_all();
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['num_links'] = 10;		
		
		$this->pagination->initialize($config);

		$data['products'] = $this->product_model->get_all($config['per_page'], $this->uri->segment(4));
		$data['mainContent'] = "/admin/product/index";
		$this->load->view('/admin/template/layout', $data);
	}

	public function add()
	{
		$this->load->model('product_model');
		$this->load->model('brand_model');
		$this->load->library('upload');

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$fileUpload = array();
			$isFileUploaded = FALSE;

			$userFile = array(
				'upload_path' => './uploads/',
				'allowed_types' => 'jpg|jpeg|png|gif',
				'encrypt_name' => TRUE
			);
			
			$this->upload->initialize($userFile);
			if (!$this->upload->do_upload('userFile')) 
			{
				$data['error'] = $this->upload->display_errors();
			}
			else
			{
				$fileUpload = $this->upload->data();
				$isFileUploaded = TRUE;
				if ($isFileUploaded) 
				{
					$options = array(
						'create_date' => $this->input->post('inputDate'),
						'brand_id' => $this->input->post('dropDownBrand'),
						'title' => $this->input->post('inputTitle'),
						'slug' => $this->input->post('inputSlug'),
						'code' => $this->input->post('inputCode'),
						'product_condition' => $this->input->post('inputCondition'),
						'price' => $this->input->post('inputPrice'),
						'description' => $this->input->post('inputDescriptions'),
						'product_img' => $fileUpload['file_name'],
						'status' => 'Deactive',
						'meta_description' => $this->input->post('inputMetaDescriptions'),
						'meta_keyword' => $this->input->post('inputMetaKeywords')
					);
					$this->product_model->create($options);
					redirect('/admin/product','refresh');
				}
			}
		}

		$data['brands'] = $this->brand_model->get_all();
		$data['mainContent'] = "/admin/product/add";
		$this->load->view('/admin/template/layout', $data);	
	}

	public function edit()
	{
		$data['mainContent'] = "/admin/product/edit";
		$this->load->view('/admin/template/layout', $data);
	}
	public function status($product_id)
	{
		$this->load->model('product_model');
		$row = $this->product_model->get_by($product_id);
		$new_status = ($row->status ==  'Deactive') ? 'Active' : 'Deactive';
		$option = array(
			'status' => $new_status
		);
		$affected = $this->product_model->update($product_id, $option);
		if($affected) redirect('/admin/product','refresh');		
	}

	public function remove($product_id)
	{
		
	}
}
