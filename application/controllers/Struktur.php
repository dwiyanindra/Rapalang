<?php
class Struktur extends CI_Controller
{
    public function input()
    {
        $data['tittle'] = 'Struktur';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('struktur/input', $data);
        $this->load->view('templates/user_footer');
    }
    public function delete()
    {
        $data['tittle'] = 'Struktur';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('struktur/delete', $data);
        $this->load->view('templates/user_footer');
    }
    public function view()
    {
        $data['tittle'] = 'Struktur';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('struktur/view', $data);
        $this->load->view('templates/user_footer');
    }
    public function edit()
    {
        $data['tittle'] = 'Struktur';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('struktur/edit', $data);
        $this->load->view('templates/user_footer');
    }
}
