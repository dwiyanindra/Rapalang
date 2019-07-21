<?php
// Untuk client

class Uploadpdf extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
         $this->load->model('Uploadpdf_model');
          $this->load->model('Client_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('string','download');
    }

    public function checkAuth()
    {
        if (!$this->session->userdata('authenticated')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login terlebih dahulu!</div>');
            redirect('auth');
        }
    }

     public function index()
    {
        $this->checkAuth();
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Uploadpdf';
        $data['active'] = 'uploadpdf';
        $data['uploadpdf'] = $this->Uploadpdf_model->joinTableClient();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('uploadpdf/index', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function input()
    {
        $this->checkAuth();
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Uploadpdf';
        $data['active'] = 'uploadpdf';
        $data['client'] = $this->Client_model->getAllclient();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('uploadpdf/input', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function masuk()
    {
        $this->checkAuth();
        // $this->db->like('judul', $this->input->post('judul'));
        // $dataid = $this->db->get('artikel')->result_array();

        $config['upload_path']          = './gambar/pdf/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 50000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('nama_pdf')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $dataku = array('upload_data' => $this->upload->data());
        }

        $data = [
            'id_client' => $this->input->post('id_client'),
            'nama_pdf' => $dataku['upload_data']['file_name'],
            'tanggal' => date('d-m-Y'),
        ];
        $this->db->insert('uploadpdf', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Alhamdulillah sudah tersimpan</div>');
        redirect('uploadpdf');
    }

    public function edit($id_pdf)
    {
        $this->checkAuth();
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Uploadpdf';
        $data['active'] = 'uploadpdf';
        $data['uploadpdf'] = $this->Uploadpdf_model->uploadpdf($id_pdf);
        
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('uploadpdf/edit', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function deleteUploadpdf($id)
    {
        $this->checkAuth();
        $this->Uploadpdf_model->deleteUploadpdf($id);

        redirect('Uploadpdf');
    }

}
