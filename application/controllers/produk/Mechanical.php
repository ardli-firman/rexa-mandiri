<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mechanical extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
    public function index()
    {
        $data = [
            "view" => "user/produk/mechanical/index",
            "barang" => $this->Barang_model->getBarangByKategori('3')
        ];
        $this->load->view('user/produk/overview', $data);
    }
}
