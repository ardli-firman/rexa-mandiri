<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->form_validation->set_rules($this->Login_model->rules());
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login/index.php');
        } else {
            $this->_doLogin();
        }
    }

    public function _doLogin()
    {
        if ($this->Login_model->login() === false) {
            $this->session->set_flashdata('pesan', "<div class='alert alert-error'>username / password salah</div>");
            $this->load->view('admin/login/index.php');
        } else {
            redirect('admin');
        }
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        redirect(base_url());
    }

    // public function rg()
    // {
    //     $this->load->view('adm.php');
    // }

    // public function reg()
    // {

    //     $pw = $this->input->post('password');

    //     $pwv = password_hash($pw, PASSWORD_DEFAULT);

    //     $data = [
    //         "nama" => $this->input->post('nama'),
    //         "username" => $this->input->post('username'),
    //         "password" => $pwv
    //     ];

    //     $this->db->insert('tbl_akun', $data);
    // }
}
