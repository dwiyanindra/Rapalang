<?php
// Untuk Home

defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('About_model');
		$this->load->model('Contactus_model');
		$this->load->model('Artikel_model');
		$this->load->model('Dokter_model');
		$this->load->model('Album_model');
		$this->load->model('Client_model');
	}
	public function index()
	{
		$this->load->library('upload');

		$data['visi'] = $this->About_model->about('Visi');
		$data['misi'] = $this->About_model->about('Misi');
		$data['moto'] = $this->About_model->about('Moto');
		$data['pemeriksaan'] = $this->About_model->about('Pemeriksaan');
		$data['pelayanan'] = $this->About_model->about('Pelayanan');
		$data['sejarah'] = $this->About_model->about('Sejarah');
		$data['artikel'] = $this->Artikel_model->getLastThreeArtikel();
		$data['dokter'] = $this->Dokter_model->getAlldokter();
		$data['album'] = $this->Album_model->getAllAlbum();
		$data['jumlahalbum'] = $this->db->count_all('album');
		$this->load->view('templates/header');
		$this->load->view('home/tampilan', $data);
		$this->load->view('templates/footer');
	}

public function dokter()
	{
		$this->load->library('upload');
		$data['dokter'] = $this->Dokter_model->getAlldokter();

		$this->load->view('templates/header');
		$this->load->view('home/dokter', $data);
		$this->load->view('templates/footer');

	}

	 public function visi()
    {
    	
    	$this->load->library('upload');
    	$data['visi'] = $this->About_model->about('Visi');
    	$data['misi'] = $this->About_model->about('Misi');
		$data['moto'] = $this->About_model->about('Moto');
		$data['sejarah'] = $this->About_model->about('Sejarah');
       
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/visi', $data);
        $this->load->view('templates/footer');
    }

    public function fasilitas()
	{
		$this->load->library('upload');
		$data['pemeriksaan'] = $this->About_model->about('Pemeriksaan');
		$data['pelayanan'] = $this->About_model->about('Pelayanan');
         
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/fasilitas', $data);
        $this->load->view('templates/footer');
    }

     public function berita()
	{
		$this->load->library('upload');
		$data['artikel'] = $this->Artikel_model->getAllArtikel();
         
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/berita', $data);
        $this->load->view('templates/footer');
    }
	

	public function contactus()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('phone', 'Phone', 'required|trim');
		$this->form_validation->set_rules('message', 'Message', 'required|trim');

		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['pesan'] = $this->input->post('message');
		$this->Contactus_model->insert($data);

		redirect('home');
	}

	 public function album()
	{
		$this->load->library('upload');
		$data['album'] = $this->Album_model->getAllAlbum();
         
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/album', $data);
        $this->load->view('templates/footer');
    }

	public function login()
    {
       
        $this->form_validation->set_rules('email_rs', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('client/login');
            $this->load->view('templates/footer_');
        } else {
            $this->login();
        }
    }
}
