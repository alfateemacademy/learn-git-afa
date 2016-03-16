<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specification_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('ml87_product_specification', $options);
		return $this->db->insert_id();
	}

	public function spec_all($productId)
	{
		$this->db->where('product_id', $productId);
		$query = $this->db->get('ml87_product_specification');
		if ($query->num_rows() > 0 ) 
			return $query->row();
		else
			return FALSE;
	}
	public function get_specification_by($specificationId)
	{
		$this->db->where('id', $specificationId);
		$query = $this->db->get('ml87_product_specification');
		return $query->row();
	}
	
	// public function specification_by($where, $single = false)
	// {
	// 	$this->db->where($where);
	// 	$query = $this->db->get('ml87_product_specification');

	// 	if($single)
	// 		return $query->row();

	// 	return $query->result();
	// }

}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */