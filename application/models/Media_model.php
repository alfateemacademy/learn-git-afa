<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_model extends CI_Model {

	/**** FRONTEND ****/

	public function get_all()
	{
		$this->db->where('media_type', 'slideshow');
		$this->db->where('status', 'Active');
		$query = $this->db->get('ml87_media');
		return $query->result();
	}
}

/* End of file Brand_model.php */
/* Location: ./application/models/Brand_model.php */