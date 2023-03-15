<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
            if ($this->session->userdata('role') != 'Admin') {
                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Kamu belum login
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>');
               redirect('auth/login');
            $this->load->model(['ModelLaporan']);
            }
    }

    public function index()
    {   
        $data= array(
            'title' => 'Laporan',
        );
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/laporan_penjualan',$data);
        $this->load->view('templates_admin/footer');
        
    }
    public function laporan_harian()
    {
        $tanggal        = $this->input->post('tanggal');
        $bulan          = $this->input->post('bulan');
        $tahun          = $this->input->post('tahun');
        $data = array
        (
            'title' => 'Laporan Penjualan Harian',
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->ModelLaporan->laporan_harian($tanggal,$bulan,$tahun),
            
        );
        $this->load->view('templates_admin/header');
        $this->load->view('admin/laporan/laporan_harian',$data);
        $this->load->view('templates_admin/footer');
    }
    public function laporan_bulanan()
    {
        // $tanggal        = $this->input->post('tanggal');
        $bulan          = $this->input->post('bulan');
        $tahun          = $this->input->post('tahun');
        $data = array
        (
            'title' => 'Laporan Penjualan Harian',
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->ModelLaporan->laporan_bulanan($bulan,$tahun),
            
        );
        $this->load->view('templates_admin/header');
        $this->load->view('admin/laporan/laporan_bulanan',$data);
        $this->load->view('templates_admin/footer');
    }
}