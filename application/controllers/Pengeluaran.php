<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengeluaran_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['pengeluaran'] = $this->Pengeluaran_model->getPengeluaran();
        $this->load->view('pengeluaran/index', $data);
    }

    public function tambah()
    {
        // Form untuk menambahkan pengeluaran
        $this->load->view('pengeluaran/tambah');
    }

    public function simpan()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga')
        );

        $this->Pengeluaran_model->tambahPengeluaran($data);
        redirect('pengeluaran');
    }
}
