<?php

/**
 * 
 */
class Admin_model extends CI_model
{
	public function getAlluser()
    {
        return $this->db->get('user')->result_array();
    }
    public function deleteAdmin($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}