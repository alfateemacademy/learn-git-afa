<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Brand extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->model('media_model', 'media');
		$this->load->model('gallery_model', 'gallery');	
	}
	
	public function index()
	{
		$data['brands'] = $this->brand->view_all();
		$data['mainContent'] = "brand/index";
		$this->load->view('template/layout', $data);
	}

	public function detail($slug)
	{
		$row = $this->brand->get_brand_by($slug);
		
		if (!$row) redirect('/brand','refresh');

		$this->db->where([
			'brand_id' => $row->id 
			]);

		$data['products'] = $this->product->view_all();
		$data['meta_content'] = $row->meta_description;
		$data['meta_keyword'] = $row->meta_keyword;
		$data['mainContent'] = "brand/detail";
		$this->load->view('template/layout', $data);
	}
}
