<?php

class Security_model extends CI_model
{
    private $_sesi;

    public function admin()
    {
        $this->_sesi = $this->session->userdata('admin');
        if ($this->_sesi === null) {
            redirect(base_url(), 'refresh');
            die();
        }
    }
}
