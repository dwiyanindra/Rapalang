<?php
class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->library('session');
       
    }

    public function index()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Artikel';
        $data['active'] = 'artikel';
        $data['artikel'] = $this->Artikel_model->getAllartikel();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function input()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['tittle'] = 'artikel';
        $data['active'] = 'artikel';
        $data['artikel'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('artikel/input', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function masuk()
    {
        // $this->db->like('judul', $this->input->post('judul'));
        // $dataid = $this->db->get('artikel')->result_array();

        $config['upload_path']          = './gambar/artikel/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['file_name']            = $this->input->post('judul');
        $config['file_type']            = 'image/jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $dataku = array('upload_data' => $this->upload->data());
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $this->upload->data('file_name'),
        ];
        $this->db->insert('artikel', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Alhamdulillah sudah tersimpan</div>');
        redirect('artikel/input');
    }
    public function edit($id)
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'artikel';
        $data['active'] = 'artikel';
        $data['artikel'] = $this->Artikel_model->artikel($id);
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('artikel/edit', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function getartikel($id)
    {
        $data['artikel'] = $this->Artikel_model->artikel($id);
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/artikel', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->Artikel_model->deleteArtikel($id);
        redirect('artikel');
    }

    public function editartikel($id)
    {
        if(!empty($_FILES['gambar']['name'])){
            echo 'ada';
            $config['upload_path']          = './gambar/artikel/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;
            $config['file_name']            = $this->input->post('judul');
            $config['file_type']            = 'image/jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $dataku = array('upload_data' => $this->upload->data());
            }


            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $this->upload->data('file_name'),
            ];
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
        }

        $this->Artikel_model->editArtikel($id, $data);

        redirect('artikel');
    }
}
