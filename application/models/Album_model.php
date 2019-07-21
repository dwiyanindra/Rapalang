<?php 
/**
 * 
 */
class Album_model extends CI_Model
{
	
	public function getAllAlbum()
	{
		return $this->db->get('album')->result_array();
	}

	public function deleteAlbum($id)
    {
        return $this->db->delete('album', array('id' => $id));
    }
}

