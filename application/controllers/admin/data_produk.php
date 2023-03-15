<?php 
class data_produk extends CI_Controller{
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
            $this->load->model(['ModelProduk','ModelKategori']);
            }
    }
    public function index()
    {   
        $data ['produk'] = $this->ModelProduk->tampil_data()->result();
        $data ['kategori'] = $this->ModelKategori->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_produk',$data);
        $this->load->view('templates_admin/footer');

    }
   
    public function tambah_aksi()
    {
        $namaproduk     = $this->input->post('namaproduk');
        $deskripsi      = $this->input->post('deskripsi');
        $namakategori   = $this->input->post('namakategori');
        $hargabefore    = $this->input->post('hargabefore');
        $hargaafter     = $this->input->post('hargaafter');
        $warna          = $this->input->post('warna');
        $ukuran         = $this->input->post('ukuran');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = ''){} else{
            $config ['upload_path'] ='./uploads';
            $config ['allowed_types'] ='jpg|jpeg|png|gif'; 

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload !!";
            } else {
                $gambar=$this->upload->data('file_name');
            }
        }
        
        $data = array
        (
            'namaproduk' => $namaproduk,
            'deskripsi' => $deskripsi,
            'namakategori' => $namakategori,
            'hargabefore' => $hargabefore,
            'hargaafter' => $hargaafter,
            'warna' => $warna,
            'ukuran' => $ukuran,
            'stok' => $stok,
            'gambar' => $gambar,
        );
        $this->ModelProduk->tambah_produk($data,'produk');
        redirect('admin/data_produk');
    }
    public function edit($idproduk)
    {
        $where = array('idproduk' => $idproduk);
        $data['produk'] = $this->ModelProduk->edit_produk($where,'produk')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_produk',$data);
        $this->load->view('templates_admin/footer');

    }
    public function update(){
        $idproduk       = $this->input->post('idproduk');
        $namaproduk     = $this->input->post('namaproduk');
        $deskripsi      = $this->input->post('deskripsi');
        $namakategori   = $this->input->post('namakategori');
        $hargabefore    = $this->input->post('hargabefore');
        $hargaafter     = $this->input->post('hargaafter');
        $warna          = $this->input->post('warna');
        $ukuran         = $this->input->post('ukuran');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = ''){} else{
            $config ['upload_path'] ='./uploads';
            $config ['allowed_types'] ='jpg|jpeg|png|gif'; 

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload !!";
            } else {
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array
        (   'idproduk' => $idproduk,
            'namaproduk' => $namaproduk,
            'deskripsi' => $deskripsi,
            'namakategori' => $namakategori,
            'hargabefore' => $hargabefore,
            'hargaafter' => $hargaafter,
            'warna' => $warna,
            'ukuran' => $ukuran,
            'stok' => $stok,
            'gambar' => $gambar
            
        );
        $where = array('idproduk' => $idproduk);
        $this->ModelProduk->update_data($where,$data,'produk');
        redirect('admin/data_produk/index');

    }
    public function hapus($idproduk)
    {
        $where = array('idproduk' => $idproduk);
        $data['produk'] = $this->ModelProduk->hapus_data($where,'produk');
        redirect('admin/data_produk/index');
    }
}

?>