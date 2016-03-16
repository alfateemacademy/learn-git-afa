<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('ml87_product', $options);
		return $this->db->insert_id();
	}

	public function get_all($num = NULL, $offset = NULL)
	{
		$query = $this->db->get('ml87_product', $num, $offset);
		return $query->result();
	}
	public function count_all()
	{
		$query = $this->db->get('ml87_product');
		return $query->num_rows();
	}
	public function get_by($productId)
	{
		$this->db->where('id', $productId);
			$query = $this->db->get('ml87_product');
		return $query->row();		
	}
	public function get_by_brand($brandId)
	{
		$this->db->where('brand_id', $brandId);
			$query = $this->db->get('ml87_product');

		return $query->result();
	}
	public function update($productId, $option)
	{
		$this->db->where('id', $productId);
		$this->db->update('ml87_product', $option);
		return $this->db->affected_rows();
	}

	public function remove($productId)
	{
		$this->db->where('id', $productId);
		$this->db->delete('ml87_product');
		return $this->db->affected_rows();

	}

	/****	FRONTEND	 ****/

	public function view_all()
	{
		$this->db->order_by('id', 'desc');
		$this->db->where('status', 'Active');
		$query = $this->db->get('ml87_product'); 
		return $query->result();
	}

	public function view_all_scroll($id = NULL)
	{
		//$this->db->order_by('id', 'desc');
		if($id != NULL)
			$this->db->where('id > ', $id);

		$query = $this->db->get('ml87_product', 10); 
		return $query->result();
	}

	public function get_product_by($slug)
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('product_gallery_spec');
		return $query->row();
	}

	public function count_product_by_brand($brandId)
	{
		$this->db->where('status', 'Active');
		$this->db->where('brand_id', $brandId);
		$query = $this->db->get('ml87_product');
		return $query->num_rows();
	}

	public function get_product_json()
    {
    	$this->db->where('status', 'Active');
        $query = $this->db->get('ml87_product');
        
        $data = array();
        foreach ($query->result() as $key => $value)
            $data[] = array(
                 'id' => $value->slug,
                 'name' => $value->title
             );
        
        echo json_encode($data);
    }


}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */