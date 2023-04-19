<?php

class Persediaan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Persediaan_model');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['persediaan'] = $this->Persediaan_model->getAllPersediaan();
        $this->load->view('templates/header', $data);
        $this->load->view('persediaan/index', $data);
        $this->load->view('templates/footer');
    }
}