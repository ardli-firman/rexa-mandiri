<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['barang'] = $this->Barang_model->getAllBarangUser();
        $this->load->view('user/index', $data);
    }
}
