<?php
class Album extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Album_model');
        $this->load->library('session');
        if (!$this->session->userdata('authenticated')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login terlebih dahulu!</div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Album';
        $data['active'] = 'album';
        $data['userku'] = $this->session->get_userdata();
        $data['album'] = $this->Album_model->getAllAlbum();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('album/index', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function input()
    {
        $data['title'] = 'Album';
        $data['active'] = 'album';
        $data['userku'] = $this->session->get_userdata();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('album/input', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function masuk()
    {
        $config['upload_path']          = './gambar/album/';
        $config['allowed_types']        = 'gif|jpg|png';
     
        $config['file_name']            = $this->input->post('nama');
        $config['file_type']            = 'image/jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $dataku = array('upload_data' => $this->upload->data());
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'nama_file' => $this->upload->data('file_name'),
        ];
        $this->db->insert('album', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Alhamdulillah sudah tersimpan</div>');
        redirect('album/index');
    }

    public function delete($id)
    {
        $this->Album_model->deleteAlbum($id);
        redirect('album');
    }
    public function view()
    {
        $data['tittle'] = 'album';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('album/view', $data);
        $this->load->view('templates/user_footer');
    }
    public function edit()
    {
        $data['tittle'] = 'album';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('album/edit', $data);
        $this->load->view('templates/user_footer');
    }
}
