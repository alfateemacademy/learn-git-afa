<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('brand_model_', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->model('media_model', 'media');
		$this->load->model('gallery_model', 'gallery');
	}
	
	public function index()
	{

		if ($this->input->get('price')) 
		{
			$priceItem = explode('-', $this->input->get('price'));
			$this->db->where('price >=', $priceItem[0]);
			$this->db->where('price <=', $priceItem[1]);
		}

		if ($this->input->get('type')) 
			$this->db->like('title', $this->input->get('type'));

		if ($this->input->get('s')) 
			$this->db->like('title', $this->input->get('s'));


		$data['products'] = $this->product->view_all();
		$data['mainContent'] = "product/index";
		$this->load->view('template/layout', $data);
	}

	public function detail($slug)
	{
		$row = $this->product->get_product_by($slug);
		$data['singleProduct'] = $row;
		$data['meta_content'] = $row->meta_description;
		$data['meta_keyword'] = $row->meta_keyword;
		$data['mainContent'] = "product/detail";
		$this->load->view('template/layout', $data);
	}

	public function new_line_method()
	{
		return "new line";
	}
}
