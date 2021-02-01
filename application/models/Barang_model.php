<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_model
{
    public $id_kategori;
    public $id_barang;
    public $nama_barang;
    public $deskripsi_barang;
    public $foto_barang;

    private $tbl_kategori = 'tbl_kategori';
    private $tbl_barang = 'tbl_barang';

    public function rules()
    {
        return [
            [
                "label" => "Nama barang",
                "field" => "nama",
                "rules" => "required"
            ],
            [
                "label" => "Deskripsi barang",
                "field" => "deskripsi",
                "rules" => "required"
            ]
        ];
    }

    public function getAllBarang()
    {
        $this->db->select('*');
        $this->db->from($this->tbl_barang);
        $this->db->join($this->tbl_kategori, "{$this->tbl_barang}.id_kategori = {$this->tbl_kategori}.id_kategori");
        $res = $this->db->get();
        if ($res->num_rows() == false) {
            return false;
            die();
        }
        return $res->result();
    }

    public function getAllBarangUser()
    {
        // $arr = ['1', '3', '4', '5', '6', '7'];
        // $randarray = array_rand($arr);
        $this->db->select('*');
        $this->db->from($this->tbl_barang);
        $this->db->join($this->tbl_kategori, "{$this->tbl_barang}.id_kategori = {$this->tbl_kategori}.id_kategori");
        $this->db->limit(4);
        $res = $this->db->get();
        if ($res->num_rows() == false) {
            return false;
            die();
        }
        return $res->result();
    }

    public function getBarangByKategori($kat)
    {
        $this->id_kategori = $kat;
        $this->db->select('*');
        $this->db->from($this->tbl_barang);
        $this->db->join($this->tbl_kategori, "{$this->tbl_barang}.id_kategori = {$this->tbl_kategori}.id_kategori");
        $this->db->where($this->tbl_kategori . '.id_kategori', $this->id_kategori);
        $res = $this->db->get();
        if ($res->num_rows() == false) {
            return false;
            die();
        }
        return $res->result();
    }

    public function getBarangById($id)
    {
        return $this->db->get_where($this->tbl_barang, ['id_barang' => $id])->row();
    }

    public function insertBarang()
    {
        $this->id_kategori = htmlspecialchars($this->input->post('kategori'));
        $this->nama_barang = htmlspecialchars($this->input->post('nama', true));
        $this->deskripsi_barang = htmlspecialchars($this->input->post('deskripsi', true));

        $upload = $this->_upload();
        if (isset($upload['error'])) {
            return $upload['error'];
        }

        $this->foto_barang = $upload['upload_data']['file_name'];

        return $this->db->insert($this->tbl_barang, $this);
    }

    public function updateBarang()
    {
        $this->id_kategori = htmlspecialchars($this->input->post('kategori'));
        $this->nama_barang = htmlspecialchars($this->input->post('nama', true));
        $this->deskripsi_barang = htmlspecialchars($this->input->post('deskripsi', true));
        $this->id_barang = htmlspecialchars($this->input->post('id_brg', true));

        if ($_FILES['foto']['error'] == 4) {
            $this->foto_barang = htmlspecialchars($this->input->post('nm_foto', true));
        } else {
            $upload = $this->_upload();
            if (isset($upload['error'])) {
                return $upload['error'];
            }

            $this->foto_barang = $upload['upload_data']['file_name'];
        }

        return $this->db->update($this->tbl_barang, $this, ['id_barang' => $this->id_barang]);
    }

    public function deleteBarang()
    {
        $this->id_barang = base64_decode(base64_decode($this->input->post_get('id', true)));
        $res = $this->getBarangById($this->id_barang);
        $this->foto_barang = $res->foto_barang;
        unlink('assets/img/' . $this->foto_barang);
        return $this->db->delete($this->tbl_barang, ['id_barang' => $this->id_barang]);
    }

    private function _upload()
    {
        $config['upload_path']          = 'assets/img/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = rand() . '.png';
        $config['max_size']             = 10240;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());

            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());

            return $data;
        }
    }
}
