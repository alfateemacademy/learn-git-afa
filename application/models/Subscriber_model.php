<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('ml87_subscriber', $options);
		return $this->db->insert_id();	
	}

	public function get_all($num = NULL, $offset = NULL)
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('ml87_subscriber', $num, $offset); 
		return $query->result();
	}

	public function count_all()
	{
		$query = $this->db->get('ml87_brand');
		return $query->num_rows();
	}

	public function get_by($subscriberId)
	{
		$this->db->where('id', $subscriberId);
		$query = $this->db->get('ml87_subscriber');
		return $query->row();
	}

	public function update($options, $subscriberId)
	{
		$this->db->where('id', $subscriberId);
		$this->db->update('ml87_subscriber', $options);
		return $this->db->affected_rows();
	}

	public function delete($subscriberId)
	{
		$this->db->where('id', $subscriberId);
		$this->db->delete('ml87_subscriber');
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
}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */