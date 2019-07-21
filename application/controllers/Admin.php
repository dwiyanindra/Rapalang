<?php
// Untuk Auth

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('session');
        if (!$this->session->userdata('authenticated')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login terlebih dahulu!</div>');
            redirect('auth');
        }
    }
    public function index()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Admin';
        $data['active'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/dashboard_footer');
    }


    public function index_()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Admin';
        $data['active'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->Admin_model->getAlluser();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('newadmin/index', $data);
        $this->load->view('templates/dashboard_footer');
    }

     public function delete($id)
    {
        $this->Admin_model->deleteAdmin($id);
        redirect('Admin/index_');
    }
    public function profile()
    {
        $data['tittle'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/user_footer');
    }
}
