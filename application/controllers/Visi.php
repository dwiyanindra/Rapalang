<?php
class Visi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visi_model');
        $this->load->library('session');
        if (!$this->session->userdata('authenticated')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harap login terlebih dahulu!</div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Visi';
        $data['active'] = 'about';
        $data['about'] = $this->Visi_model->getAllvisi();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('visi/index', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function input()
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'Visi';
        $data['active'] = 'visi';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('visi/input', $data);
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
        $this->db->insert('visi', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Alhamdulillah sudah tersimpan</div>');
        redirect('visi');
    }
    public function view()
    {
        $data['tittle'] = 'visi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('visi/view', $data);
        $this->load->view('templates/user_footer');
    }
    public function edit($id)
    {
        $data['userku'] = $this->session->get_userdata();
        $data['title'] = 'visi';
        $data['active'] = 'about';
        $data['about'] = $this->Visi_model->
        visi($id);
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('visi/edit', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function getvisi()
    {
        $data['visi'] = $this->Visi_model->visi('1');
        $data['misi'] = $this->Visi_model->visi('2');
        $data['moto'] = $this->Visi_model->visi('3');
        $data['sejarah'] = $this->Visi_model->visi('9');
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/visi', $data);
        $this->load->view('templates/footer');
    }

    public function editvisi($id)
    {
        
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            ];
        

        $this->Visi_model->editVisi($id, $data);

        redirect('visi');
    }
}
