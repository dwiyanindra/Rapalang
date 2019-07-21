<?php
class Contactus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contactus_model');
        $this->load->library('session');
        if (!$this->session->userdata('authenticated')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login terlebih dahulu!</div>');
            redirect('auth');
        }
    }
    public function index()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Contactus';
          $data['active'] = 'contactus';
        $data['contactus'] = $this->Contactus_model->getAllContactus();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('contactus/index', $data);
        $this->load->view('templates/dashboard_footer');
    }

  
    public function view($id)
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'contactus';
        $data['active'] = 'contactus';
        $data['contactus'] = $this->Contactus_model->contactus($id);
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('contactus/view', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function getcontactus($id)
    {
        $data['contactus'] = $this->Contactus_model->contactus($id);
        $this->load->view('templates/header');
        $this->load->view('home/contactus', $data);
        $this->load->view('templates/footer');
    }
 
}