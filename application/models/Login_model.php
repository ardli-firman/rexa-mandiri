<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_model
{
    private $_username;
    private $_password;
    private $_tabel = "tbl_akun";

    public function rules()
    {
        return [
            [
                "field" => "username",
                "label" => "Username",
                "rules" => "trim|required"
            ],
            [
                "field" => "password",
                "label" => "Password",
                "rules" => "trim|required"
            ]
        ];
    }

    public function login()
    {
        $this->_username = htmlspecialchars($this->input->post('username', true));
        $this->_password = $this->input->post('password', true);

        $res = $this->db->get_where($this->_tabel, ["username" => $this->_username])->row();
        if ($res === null) {
            return false;
        } else {
            if (password_verify($this->_password, $res->password) == false) {
                return false;
            } else {
                $data = [
                    "admin" => $res
                ];
                $this->session->set_userdata($data);
                return true;
            }
        }
    }
}
