<?php

/**
 * 
 */
class Artikel_model extends CI_model
{

    public function getAllartikel()
    {
        return $this->db->get('artikel')->result_array();
    }

    public function artikel($id)
    {
        $this->db->like('id', $id);
        return $this->db->get('artikel')->result_array();
    }

    public function getLastThreeArtikel()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(3);
        return $this->db->get('artikel')->result_array();
    }

    public function deleteArtikel($id)
    {
        return $this->db->delete('artikel', array('id' => $id));
    }

    public function editArtikel($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('artikel', $data);
    }
}
