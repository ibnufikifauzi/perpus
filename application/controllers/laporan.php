<?php

class Laporan extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_laporan');
        $this->load->helper('tgl_indo_helper');
        $this->load->library('pdf_report');
    }
    public function peminjaman()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $this->session->userdata('tanggal_awal', $tgl_awal);
        $this->session->userdata('tanggal_akhir', $tgl_akhir);

        if (empty($tgl_awal)   || empty($tgl_akhir)) {
            $isi['content']     = 'laporan/v_laporan';
            $isi['judul']       = 'Laporan Peminjaman Buku';
            $isi['data']        = $this->m_laporan->getAllData(); 
        }else{
            $isi['content']     = 'laporan/v_laporan';
            $isi['judul']       = 'Laporan Peminjaman Buku';
            $isi['data']        = $this->m_laporan->fiterData($tgl_awal, $tgl_akhir); 
        }

        $this->load->view('v_dashboard', $isi);
    }

    public function pdf_peminjaman()
    {
        if (empty($this->session->userdata('tanggal_awal')) || empty($this->session->userdata('tanggal_akhir'))){
            $isi['data'] = $this->m_laporan->getAllData();
            $this->load->view('laporan/pdf_peminjaman', $isi);
        }else{
            $isi['data'] = $this->m_laporan->filterData($$this->session->userdata('tanggal_awal'),$this->session->userdata('tanggal_akhir'));
            $this->load->view('laporan/pdf_peminjaman', $isi);
        }
    }

}