<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat library database
    }

    public function getPengeluaran()
    {
        return $this->db->get('pengeluaran')->result_array();
    }

    public function tambahPengeluaran($data)
    {
        $this->db->insert('pengeluaran', $data);
    }
}
