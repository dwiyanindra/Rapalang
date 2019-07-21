<?php

/**
 * 
 */
class About_model extends CI_model
{

	public function getAllabout()
	{
		return $this->db->get('about')->result_array();
	}

	public function about($judul)
	{
		$this->db->like('judul', $judul);
		return $this->db->get('about')->result_array();
	}
}
