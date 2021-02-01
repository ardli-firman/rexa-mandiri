<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Safety extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
    public function index()
    {
        $data = [
            "view" => "user/produk/safety/index",
            "barang" => $this->Barang_model->getBarangByKategori('6')
        ];
        $this->load->view('user/produk/overview', $data);
    }
}
