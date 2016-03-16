<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('ml87_product_gallery', $options);
		return $this->db->insert_id();
	}

	public function gallery_by_product($productId)
	{
		$this->db->where('product_id', $productId);
		$query = $this->db->get('ml87_product_gallery');
		return $query->result();
	}

}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */