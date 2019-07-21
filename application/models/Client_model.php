<?php

/**
 * 
 */
class Client_model extends CI_model
{

    public function getAllclient()
    {
        return $this->db->get('client')->result_array();
    }

    public function client($id_client)
    {
        $this->db->like('id_client',$id_client);
        return $this->db->get('client')->result_array();
    }

    public function editClient($id_client, $data)
    {
        $this->db->where('id_client', $id_client);
        return $this->db->update('client', $data);
    }

    public function deleteClient($id)
    {
        $this->db->where('id_client', $id);
        return $this->db->delete('client');
    }

    public function checkClient($email, $password)
    {
        $checkClient =  $this->db->where('email_rs', $email)->get('client')->row();
        if(!empty($checkClient->id_client)){
            if($checkClient->password == $password){
                return $checkClient;
            }
            return 0;
        }
        return 0;
    }
}
