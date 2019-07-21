<?php

class Contactus_model extends CI_model
{

	public function getAllcontactus()
	{
		return $this->db->get('contactus')->result_array();
	}

	public function contactus($id)
    {
        $this->db->like('id', $id);
        return $this->db->get('contactus')->result_array();
    }

	public function insert($data)
	{
		$this->db->insert('contactus', $data);
	}

	public function ViewContactus($id, $data)
	{
        $this->db->where('id', $id);
        return $this->db->update('contactus', $data);
	}
}
