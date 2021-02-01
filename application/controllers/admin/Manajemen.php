<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model');
        $this->load->model('Barang_model');
        $this->Security_model->admin();
    }
    public function index()
    {
        $data = [
            "barang" => $this->Barang_model->getAllBarang(),
            "view" => "admin/manajemen/index",
            "judul" => "Manajemen barang"
        ];
        $this->load->view('admin/overview', $data);
    }

    public function tambah()
    {
        $barang = $this->Barang_model;
        $this->form_validation->set_rules($barang->rules());
        if ($this->form_validation->run() == false) {
            die(validation_errors());
        } else {
            $res = $this->Barang_model->insertBarang();
            if ($res === true) {
                die(true);
            } else {
                die($res);
            }
        }
    }

    public function hapus()
    {
        if ($this->input->post_get('id', true) !== null) {
            $res = $this->Barang_model->deleteBarang();
            redirect('admin');
        }
    }

    public function getUbah()
    {
        if ($this->input->post('id') != null) {
            $res = $this->Barang_model->getBarangById(base64_decode(base64_decode($this->input->post('id'))));
            echo json_encode($res);
        }
    }

    public function ubah()
    {
        $barang = $this->Barang_model;
        $this->form_validation->set_rules($barang->rules());
        if ($this->form_validation->run() == false) {
            die(validation_errors());
        } else {
            $res = $this->Barang_model->updateBarang();
            if ($res === true) {
                die(true);
            } else {
                die($res);
            }
        }
    }
}
