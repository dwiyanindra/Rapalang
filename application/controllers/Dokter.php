<?php
class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('session');
        if (!$this->session->userdata('authenticated')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login terlebih dahulu!</div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Dokter';
        $data['active'] = 'dokter';
        $data['dokter'] = $this->Dokter_model->getAlldokter();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function input()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Dokter';
        $data['active'] = 'dokter';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('dokter/input', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function masuk()
    {
        // $this->db->like('judul', $this->input->post('judul'));
        // $dataid = $this->db->get('artikel')->result_array();

        $config['upload_path']          = './gambar/dokter/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['file_name']            = $this->input->post('nama');
        $config['file_type']            = 'image/jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $dataku = array('upload_data' => $this->upload->data());
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'keterangan' => $this->input->post('keterangan'),
            'foto' => $this->upload->data('file_name'),
        ];
        $this->db->insert('dokter', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Alhamdulillah sudah tersimpan</div>');
        redirect('dokter');
    }
    public function view()
    {
        $data['tittle'] = 'dokter';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('dokter/view', $data);
        $this->load->view('templates/user_footer');
    }
    public function edit($id)
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'dokter';
        $data['active'] = 'dokter';
        $data['dokter'] = $this->Dokter_model->dokter($id);
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('dokter/edit', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function getdokter()
    {
        $data['dokter'] = $this->Dokter_model->dokter('1');
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/dokter', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->Dokter_model->deleteDokter($id);
        redirect('dokter');
    }

    public function editdokter($id)
    {
        if(!empty($_FILES['foto']['name'])){
            echo 'ada';
            $config['upload_path']          = './gambar/dokter/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;
            $config['file_name']            = $this->input->post('nama');
            $config['file_type']            = 'image/jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $dataku = array('upload_data' => $this->upload->data());
            }


            $data = [
                'nama' => $this->input->post('nama'),
                'keterangan' => $this->input->post('keterangan'),
                'foto' => $this->upload->data('file_name'),
            ];
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'keterangan' => $this->input->post('keterangan'),
            ];
        }

        $this->Dokter_model->editdokter($id, $data);

        redirect('dokter');
    }
}
