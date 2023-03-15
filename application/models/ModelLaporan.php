<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelLaporan extends CI_Model{
    
    public function laporan_harian($tanggal,$bulan,$tahun)
    {
        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->join('pesanan','pesanan.id_invoice = invoice.id','left');
        $this->db->join('produk','produk.idproduk = pesanan.idproduk','left');
        $this->db->where('DAY(invoice.tgl_pesan)',$tanggal);
        $this->db->where('MONTH(invoice.tgl_pesan)',$bulan);
        $this->db->where('YEAR(invoice.tgl_pesan)',$tahun);
        return $this->db->get()->result();

    }
    public function laporan_bulanan($bulan,$tahun)
    {
        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->join('pesanan','pesanan.id_invoice = invoice.id','left');
        $this->db->join('produk','produk.idproduk = pesanan.idproduk','left');
        $this->db->where('MONTH(invoice.tgl_pesan)',$bulan);
        $this->db->where('YEAR(invoice.tgl_pesan)',$tahun);
        return $this->db->get()->result();

    }
}