<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function validate_credentials($data)
	{
		$this->db->where($data);
		$query = $this->db->get('ml87_member');
		if ($query->num_rows() > 0 ) 
			return $query->row();

		return FALSE;
	}

}

/* End of file Member_model.php */
/* Location: ./application/models/Member_model.php */