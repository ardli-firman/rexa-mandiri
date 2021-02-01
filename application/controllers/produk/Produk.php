<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function elektrik()
    {
        $this->load->view('user/produk/overview');
    }
}
