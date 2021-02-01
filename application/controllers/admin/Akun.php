<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model');
        $this->load->model('Akun_model');
        $this->Security_model->admin();
    }

    public function index()
    {
        $this->form_validation->set_rules($this->Akun_model->rules());
        if ($this->form_validation->run() == false) {
            $data = [
                "akun" => $this->Akun_model->getAll(),
                "view" => "admin/akun/index",
                "judul" => "Akun admin"
            ];
            $this->load->view('admin/overview', $data);
        } else {
            $res = $this->Akun_model->update();
            if ($res == 1) {
                $this->session->set_flashdata('pesan', "<div class='alert alert-success'>Berhasil di ubah !</div>");
                $data = [
                    "akun" => $this->Akun_model->getAll(),
                    "view" => "admin/akun/index",
                    "judul" => "Akun admin"
                ];
                $this->load->view('admin/overview', $data);
            } else {
                $this->session->set_flashdata('pesan', "<div class='alert alert-warning'>Password salah</div>");
                $data = [
                    "akun" => $this->Akun_model->getAll(),
                    "view" => "admin/akun/index",
                    "judul" => "Akun admin"
                ];
                $this->load->view('admin/overview', $data);
            }
        }
    }
}
