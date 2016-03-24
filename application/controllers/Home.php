<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->model('media_model', 'media');
		$this->load->model('subscriber_model', 'subscriber');
	}
	
	public function index()
	{
		$data['products'] = $this->product->view_all();
		$data['products'] = $this->product->view_all_scroll();
		$data['mainContent'] = "index";
		$this->load->view('template/layout', $data);
	}

	public function more_products($id)
	{
		$data['products'] = $this->product->view_all_scroll($id);
		$this->load->view('_partials/products', $data);
	}

	public function about()
	{
		$data['mainContent'] = "about";
		$this->load->view('template/layout', $data);	
	}

	public function contact()
	{	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
            $this->load->library('email');

			$mailConfig['protocol']  = 'smtp';
			$mailConfig['smtp_host'] = 'ssl://smtp.googlemail.com';
            $mailConfig['smtp_user'] = 'mera_laptop@gmail.com';
            $mailConfig['smtp_pass'] = 'Karachi123@';
            $mailConfig['smtp_port'] = 465;
            $mailConfig['charset']   = 'utf-8';
            $mailConfig['mailtype']  = 'html';
            $mailConfig['wordwrap']  = TRUE;

            $this->email->initialize($mailConfig);
            $this->email->set_newline("\r\n");
            $this->email->from('mera_laptop@gmail.com');
    		$this->email->to('ayzeetech@gmail.com');
    		$this->email->subject('Contact Us - Mera Laptop');
    		$this->email->reply_to($this->input->post('inputEmail'));

    		$body = '<h1>Contact Us Mera Laptop</h1>';
    		$body .= 'Fullname:' . $this->input->post('inputFullname');	
    		$body .= 'URL:' . $this->input->post('inputUrl');
    		$body .= 'Message:' . $this->input->post('inputMessage');
    		
    		$this->email->message($body);

    		if (!$this->email->send())
    			echo $this->email->print_debugger();
    		else
    			echo "success";	

    		return;
		}


		$data['mainContent'] = "contact";
		$this->load->view('template/layout', $data);
	}

	public function vision()
	{
		$data['mainContent'] = "vision";
		$this->load->view('template/layout', $data);
	}
	public function webmaster()
	{
		$data['mainContent'] = "webmaster";
		$this->load->view('template/layout', $data);
	}

	public function add_subscriber()
	{
		$options = array(
			'create_date' => date('d-m-y'),
			'email' => $this->input->post('inputEmail'),
			'status' => 'Deactive',
		);

		$affected = $this->subscriber->create($options);
		if ($affected) {
			echo json_encode(array('success' => true, 'message' => 'Your email has been subscribed.'));
			exit();
		}
	}


	public function json_search()
    {
        echo $this->product->get_product_json();
    }
}
