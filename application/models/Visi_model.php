<?php

/**
 * 
 */
class Visi_model extends CI_model
{

    public function getAllvisi()
    {
        return $this->db->get('about')->result_array();
    }

    public function visi($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('about')->result_array();
    }

    public function getLastThreeVisi()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(3);
        return $this->db->get('about')->result_array();
    }

    public function deleteVisi($id)
    {
        return $this->db->delete('about', array('id' => $id));
    }

    public function editVisi($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('about', $data);
    }
}
