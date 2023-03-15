<?php 
class kategori extends CI_Controller{
    public function gamis()
    {
        $data['gamis'] = $this->ModelKategori->data_gamis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/gamis',$data);
        $this->load->view('templates/footer');
    }
    public function rok_plisket()
    {
        $data['rok_plisket'] = $this->ModelKategori->data_rok_plisket()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/rok_plisket',$data);
        $this->load->view('templates/footer');
    }
    public function pasminah()
    {
        $data['pasminah'] = $this->ModelKategori->data_pasminah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/pasminah',$data);
        $this->load->view('templates/footer');
    }
    public function gamis_santai()
    {
        $data['gamis_santai'] = $this->ModelKategori->data_gamis_santai()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/gamis_santai',$data);
        $this->load->view('templates/footer');
    }
    public function muslim_pria()
    {
        $data['muslim_pria'] = $this->ModelKategori->data_muslim_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/muslim_pria',$data);
        $this->load->view('templates/footer');
    }
    public function muslimah()
    {
        $data['muslimah'] = $this->ModelKategori->data_muslimah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/muslimah',$data);
        $this->load->view('templates/footer');
    }
    public function kerudung_segi()
    {
        $data['kerudung_segi'] = $this->ModelKategori->data_kerudung()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/kerudung_segi',$data);
        $this->load->view('templates/footer');
    }
    public function ciput()
    {
        $data['ciput'] = $this->ModelKategori->data_ciput()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/ciput',$data);
        $this->load->view('templates/footer');
    }
}
?>