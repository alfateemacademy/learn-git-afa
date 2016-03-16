<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('ml87_brand', $options);
		return $this->db->insert_id();	
	}

	public function get_all($num = NULL, $offset = NULL)
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('ml87_brand', $num, $offset);
		return $query->result();
	}

	public function count_all()
	{
		$query = $this->db->get('ml87_brand');
		return $query->num_rows();
	}

	public function get_by($brand_id)
	{
		$this->db->where('id', $brand_id);
		$query = $this->db->get('ml87_brand');
		return $query->row();
	}

	public function update($options, $brandId)
	{
		$this->db->where('id', $brandId);
		$this->db->update('ml87_brand', $options);
		return $this->db->affected_rows();
	}

	public function delete($brandId)
	{
		$this->db->where('id', $brandId);
		$this->db->delete('ml87_brand');
		return $this->db->affected_rows();
	}

	public function brand_exists($title)
	{
		$title = array(
			'title' => $title 
		);

		$this->db->where($title);

		$query = $this->db->get('ml87_brand');
		return $query->result();
	}


	public function brand_array()
	{
		$brands = array();
		foreach ($this->get_all() as $index => $brand) 
			$brands[$brand->id] = $brand->title;
	
		return $brands;
	}


	/**** FRONTEND ****/

	public function view_all()
	{
		$this->db->where('status', 'Active');
		$query = $this->db->get('ml87_brand');
		return $query->result();
	}

	public function get_brand_by($slug)
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('ml87_brand');
		return $query->row();
	}

}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */