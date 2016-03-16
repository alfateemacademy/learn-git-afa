<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('product_model', 'product');
	}

	public function index()
	{
		$cart = $this->cart->contents(); 

		//print_r($cart);
		//die();

		$data = [
			'cart_content' => $cart
		];

		$this->load->view('cart/index', $data);
	}

	public function add()
	{
		$productId = $this->input->post('product_id');
		$product = $this->product->get_by($productId);

		$data = array(
	        'id'      => $product->id,
	        'qty'     => 1,
	        'price'   => $product->price,
	        'name'    => $product->title
		);

		$this->cart->insert($data);
	}

	public function update()
	{
		$data = [
			'qty' => $this->input->post('qty'),
			'rowid' => $this->input->post('rowId')
		];

		$this->cart->update( $data );

		redirect('/cart', 'refresh');

	}

	public function remove()
	{
		$rowId = $this->input->post('rowId');
		$this->cart->remove($rowId);

		redirect('/cart', 'refresh');

	}

}