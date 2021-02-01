<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_model
{
    public $nama;
    public $username;
    public $password;
    public $id;

    private $tbl_akun = 'tbl_akun';

    public function rules()
    {
        return [
            [
                'label' => 'Nama',
                'field' => 'nama',
                'rules' => 'trim|required'
            ],
            [
                'label' => 'Username',
                'field' => 'username',
                'rules' => 'trim|required'
            ],
            [
                'label' => 'Password sebelumnya',
                'field' => 'sebelum',
                'rules' => 'trim|required',
                'errors' => ['required' => 'Password harus disi']
            ],
            [
                'label' => 'Password baru',
                'field' => 'password',
                'rules' => "trim|matches[cpassword]",
                'errors' => ['matches' => 'Password tidak sama']
            ],
            [
                'label' => 'Konfirmasi password',
                'field' => 'cpassword',
                'rules' => "trim|required",
                'errors' => ['required' => 'Password harus disi']
            ]

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->tbl_akun)->row();
    }

    public function update()
    {
        $data = $this->getAll();
        $this->password = $data->password;
        if (!password_verify($this->input->post('sebelum', true), $this->password)) {
            return false;
            die();
        }
        $this->id = htmlspecialchars(base64_decode(base64_decode($this->input->post('id', true))));
        $this->nama = htmlspecialchars($this->input->post('nama', true));
        $this->username = htmlspecialchars($this->input->post('username', true));
        if ($this->input->post('password', true)) {
            $this->password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
        }
        $this->db->update($this->tbl_akun, $this, ['id' => $this->id]);
        return $this->db->affected_rows();
    }
}
