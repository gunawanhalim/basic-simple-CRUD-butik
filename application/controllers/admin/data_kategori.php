<?php 
class data_kategori extends CI_Controller{
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
               $this->load->model('ModelKategori');
            }
    }
    public function index()
    {   date_default_timezone_set('Asia/Makassar');
        $data ['kategori'] = $this->ModelKategori->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kategori',$data);
        $this->load->view('templates_admin/footer');

    }
    
    public function tambah_aksi()
    {    date_default_timezone_set('Asia/Makassar');
        $namakategori   = $this->input->post('namakategori');
        $data = array
        (
            'namakategori' => $namakategori,
            'create_at' => date('Y-m-d H:i:s'),
            
        );
        $this->ModelKategori->tambah_kategori($data,'kategori');
        redirect('admin/data_kategori/index');
    }
    public function edit($idkategori)
    {
        $where = array('idkategori' => $idkategori);
        $data['kategori'] = $this->ModelKategori->edit_kategori($where,'kategori')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_kategori',$data);
        $this->load->view('templates_admin/footer');

    }
    public function update(){
        date_default_timezone_set('Asia/Makassar');
        $idkategori     = $this->input->post('idkategori');
        $namakategori   = $this->input->post('namakategori');
        $create_at      = $this->input->post('create_at');
       

        $data = array
        (   'idkategori' => $idkategori,
            'namakategori' => $namakategori,
            'create_at' => date('Y-m-d H:i:s'),
            
            
        );
        $where = array('idkategori' => $idkategori);
        $this->ModelKategori->update_data($where,$data,'kategori');
        redirect('admin/data_kategori/index');

    }
    public function hapus($idkategori)
    {
        $where = array('idkategori' => $idkategori);
        $data['kategori'] = $this->ModelKategori->hapus_data($where,'kategori');
        redirect('admin/data_kategori/index');
    }
}

?>