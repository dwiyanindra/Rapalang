<?php
// Untuk client

class Client extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Client_model');
        $this->load->model('Uploadpdf_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('string');
    }

    public function checkAuth()
    {
        if (!$this->session->userdata('authenticated')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login terlebih dahulu!</div>');
            redirect('auth');
        }
    }
 
    public function verifikasi()
    {
        $checkClient = $this->Client_model->checkClient($this->input->post('email_rs'), $this->input->post('password'));
        if (!empty($checkClient)) {
            $data['uploadpdf']= $this->Uploadpdf_model->getByEmail($this->input->post('email_rs'));
            $this->load->view('templates/header');
            $this->load->view('client/dashboard', $data);
            $this->load->view('templates/footer_');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau password salah!</div>');
            redirect('home/login');
        }
        
    }

    public function dashboard()
    {          
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Uploadpdf';
        $data['active'] = 'uploadpdf';
        $data['uploadpdf'] = $this->Uploadpdf_model->joinTableClient();
        $this->load->view('templates/header', $data);
        $this->load->view('client/dashboard', $data);
        $this->load->view('templates/footer_');
    }

    public function index()
    {
        $this->checkAuth();
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Client';
        $data['active'] = 'client';
        $data['client'] = $this->Client_model->getAllclient();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('client/index', $data);
        $this->load->view('templates/dashboard_footer');
    }
     public function input()
    {
        $this->checkAuth();
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Client';
        $data['active'] = 'client';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('client/input', $data);
        $this->load->view('templates/dashboard_footer');
    }

     public function masuk()
    {
        $this->checkAuth();
        $data = [
            'nama_rs' => $this->input->post('name'),
            'email_rs' => $this->input->post('email'),
            'password' => random_string('alnum', 8),
        ];
        $this->db->insert('client', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Alhamdulillah sudah tersimpan</div>');
        redirect('client');
    }

     public function edit($id_client)
    {
        $this->checkAuth();
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'client';
        $data['active'] = 'client';
        $data['client'] = $this->Client_model->client($id_client);
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('client/edit', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function editClient($id_client)
    {
        $this->checkAuth();
            $data = [
                'nama_rs' => $this->input->post('nama'),
                'email_rs' => $this->input->post('email'),
            ];
        

        $this->Client_model->editClient($id_client, $data);

        redirect('client');
    }

    public function deleteClient($id)
    {
        $this->checkAuth();
        $this->Client_model->deleteClient($id);

        redirect('client');
    }
     public function client()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'User';
        $data['active'] = 'dashboard';
        $data['client'] = $this->db->get_where('client', ['email_rs' => $this->session->userdata('email_rs')])->row_array();
        $this->load->view('templates/dashboard_header_client', $data);
        $this->load->view('client/dashboard', $data);
        $this->load->view('templates/dashboard_footer_client');
    }
}