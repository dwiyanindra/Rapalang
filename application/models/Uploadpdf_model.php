<?php

/**
 * 
 */
class Uploadpdf_model extends CI_model
{
    public function getByEmail($email)
    {
        $this->db->select('*');
        $this->db->from('uploadpdf');
        $this->db->join('client', 'uploadpdf.id_client = client.id_client');
        $this->db->where('client.email_rs', $email);
        return $this->db->get()->result();
    }
    public function getAlluploadpdf()
    {
        return $this->db->get('uploadpdf')->result_array();
    }

    public function uploadpdf($id_pdf)
    {
        $this->db->like('id_pdf',$id_pdf);
        return $this->db->get('uploadpdf')->result_array();
    }
    public function deleteUploadpdf($id)
    {
        $this->db->where('id_pdf', $id);
        $query = $this->db->get('uploadpdf');
        $row = $query->row();

     unlink("./gambar/pdf/$row->nama_pdf");

    return $this->db->delete('uploadpdf', array('id_pdf' => $id));


    }

    public function editUploadpdf($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('uploadpdf', $data);
    }

    public function joinTableClient()
    {
        $this->db->select('*');
        $this->db->from('uploadpdf');
        $this->db->join('client', 'uploadpdf.id_client = client.id_client');
        return $this->db->get()->result_array();
    }
}