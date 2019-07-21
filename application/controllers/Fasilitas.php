<?php
class Fasilitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visi_model');
        $this->load->library('session');
    }

    public function index()
    {
         $data['pemeriksaan'] = $this->Visi_model->visi('11');
         $data['pelayanan'] = $this->Visi_model->visi('12');
        //var_dump($data['artikel']);
        $this->load->view('templates/header');
        $this->load->view('home/fasilitas', $data);
        $this->load->view('templates/footer');
    }
   
}
