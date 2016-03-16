<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->library('upload');
		$this->load->library('pagination');

		if (!$this->session->userdata('is_logged_in')) 
			redirect('/admin','refresh');
	}

	public function index()
	{
		$config['base_url'] = base_url() . '/admin/brand/index';
		$config['total_rows'] = $this->brand->count_all();
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['num_links'] = 10;		
		
		$this->pagination->initialize($config);
		
		$data['brands'] =  $this->brand->get_all($config['per_page'], $this->uri->segment(4));
		$data['title'] = "Manage Brand";
		$data['mainContent'] = "admin/brand/index";
		$this->load->view('admin/template/layout', $data);
	}

	public function add()
	{	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$this->form_validation->set_rules('inputDate', 'Date', 'required');
			$this->form_validation->set_rules('inputTitle', 'Title', 'required');
			
			if ($this->form_validation->run() == TRUE) 
			{
			$title = $this->input->post('inputTitle');
			$available_brand = $this->brand->brand_exists($title);
			if ($available_brand) 
			{
				$data['msg'] = "$title is Not Available!";
			}
			else
			{
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
							'title' => $this->input->post('inputTitle'), 
							'slug' => $this->input->post('inputSlug'), 
							'brand_img' => $fileUpload['file_name'], 
							'status' => 'Deactive', 
							'meta_description' => $this->input->post('inputMetaDescriptions'), 
							'meta_keyword' => $this->input->post('inputMetaKeywords'), 
						);
						$this->brand->create($options);
						redirect('/admin/brand','refresh');
					}
				}
			}
		}
	}

		$data['title'] = "Add Brand";
		$data['mainContent'] = 'admin/brand/add';
		$this->load->view('admin/template/layout', $data);		
	}

	public function edit($brand_id)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$title  = $this->input->post('inputTitle');
			$available_brand = $this->brand->brand_exists($title);
			if ($available_brand) 
			{
				$data['msg'] = "$title is Already Exists";
			}
			else
			{	

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
				$options = array(
					'create_date' => $this->input->post('inputDate'), 
					'title' => $this->input->post('inputTitle'), 
					'slug' => $this->input->post('inputSlug'), 
					'brand_img' => ($isFileUploaded) ? $fileUpload['file_name'] : $this->input->post('img_url'), 
					'meta_description' => $this->input->post('inputMetaDescriptions'), 
					'meta_keyword' => $this->input->post('inputMetaKeywords'), 
				);

				$affected = $this->brand->update($options, $brand_id);
				if ($affected) 
				{
					if ($isFileUploaded) 
						if (file_exists('./uploads/' . $this->input->post('img_url'))) 
							unlink('./uploads/' . $this->input->post('img_url'));
				
					redirect('/admin/brand','refresh');
				}
			}
		}
	}
		$data['brand'] = $this->brand->get_by($brand_id);
		$data['title'] = "Edit Brand";
		$data['mainContent'] = 'admin/brand/edit';
		$this->load->view('admin/template/layout', $data);
	}

	public function delete($brand_id)
	{
		$this->brand->delete($brand_id);
		$error = $this->db->error();
		// $error['code']
		// $error['message']

		if($error['code'] > 0)
		{
			if($error['code'] == 1451)
				echo json_encode(['message' => 'You cannot delete this brand', 'status' => false]);
		}
		else
		{
			echo json_encode(['status' => true]);
		}
		
		//echo $this->db->_error_message();
		//$row = $this->brand->get_by($brand_id);
		/*$currentImage = $row->brand_img;
		$affected = $this->brand->delete($brand_id);
		if ($affected)
		{
			unlink('./uploads/' . $currentImage);
			echo 1;
		} */
	}

	public function new_delete($brand_id)
	{
		$row = $this->brand->get_by($brand_id);
		$currentImage = $row->brand_img;

		$productCount = count($this->product->get_by_brand($brand_id));

		if($productCount > 0)
		{
			echo json_encode(['message' => 'You cannot delete this brand', 'status' => false]);
		}
		else
		{
			$affected = $this->brand->delete($brand_id);
			if ($affected)
			{
				unlink('./uploads/' . $currentImage);
				echo json_encode(['status' => true]);
			} 
			
		}
	}

	public function status($brand_id)
	{
		$row = $this->brand->get_by($brand_id);
		$new_status = ($row->status == 'Deactive') ? 'Active' : 'Deactive';

		$option = array(
			'status' => $new_status 
		);

		$affected = $this->brand->update($option, $brand_id);
		if($affected) 
		{
			echo $new_status;
			//redirect('/admin/brand','refresh');	
		}
	}


	public function active_status()
	{
		$chkParamId = $this->input->post('chkParamId');
		
		$option = array(
			'status' => 'Active' 
		);

		foreach ($chkParamId as $id) 
		{
			echo $this->brand->update($option, $id);
		}
	}

	public function deactive_status()
	{
		$chkParamId = $this->input->post('chkParamId');

		$option = array(
			'status' => 'Deactive'
		);

		foreach ($chkParamId as $id) {
			echo $this->brand->update($option, $id);
		}
	}

	public function delete_all()
	{
		$chkParamId = $this->input->post('chkParamId');		
		foreach ($chkParamId as $id) {
			echo $this->delete($id);
		}
	}
}
