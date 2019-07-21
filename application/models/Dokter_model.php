<?php

/**
 * 
 */
class Dokter_model extends CI_model
{

    public function getAlldokter()
    {
        return $this->db->get('dokter')->result_array();
    }

    public function dokter($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('dokter')->result_array();
    }

    public function getLastThreeDokter()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(3);
        return $this->db->get('dokter')->result_array();
    }

    public function deleteDokter($id)
    {
         $this->db->where('id', $id);
        $query = $this->db->get('dokter');
        $row = $query->row();

     unlink("./gambar/dokter/$row->nama");

    return $this->db->delete('dokter', array('id' => $id));

       //return $this->db->delete('dokter', array('id' => $id));
    }

    public function editDokter($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('dokter', $data);
    }
}
