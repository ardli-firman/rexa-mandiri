<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
    public function index()
    {
        $data = [
            "view" => "user/produk/sparepart/index",
            "barang" => $this->Barang_model->getBarangByKategori('5')
        ];
        $this->load->view('user/produk/overview', $data);
    }
}
