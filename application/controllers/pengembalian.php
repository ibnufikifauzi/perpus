<?php

class Pengembalian extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->helper('tgl_indo_helper');
    }

    public function index()
    {
        $isi['content'] = 'pengembalian/v_pengembalian';
        $isi['judul']   = 'Data Pengembalian Buku';
        $this->load->model('m_pengembalian');
        $isi['data']    = $this->m_pengembalian->getAllData();
        $this->load->view('v_dashboard', $isi);
    }
}