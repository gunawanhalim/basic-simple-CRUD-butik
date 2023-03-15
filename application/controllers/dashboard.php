<?php
class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
            if ($this->session->userdata('role') != 'Member') {
                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Kamu belum login
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>');
               redirect('auth/login');
            }
    }
  
    

    public function tambah_ke_keranjang($idproduk)
    {   
        $produk = $this->ModelProduk->find($idproduk);

        $data = array(
            'id' => $produk->idproduk,
            'qty' => 1,
            'name' => $produk->namaproduk,
            'price' => $produk->hargaafter,
            'stok' => $produk->stok,
        );

        $this->cart->insert($data);
        redirect('welcome');

    }
    public function ubahCart()
    {   
        $i = 1;
        foreach  ( $this -> cart -> contents()  as  $items ) {
            $data  =  array ( 
                'rowid'   =>  $items['rowid'] , 
                'qty'     =>  $this->input->post($i . '[qty]') , 
                
            );
        
            $this -> cart -> update ( $data );
            $i++;
        }
       redirect('dashboard/pembayaran');
    }
    public function deleteCart($rowid)
    {   
        $this->cart->remove($rowid);
        redirect('dashboard/detail_keranjang');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }
    public function detail_keranjang()
    {   
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
    
    public function pembayaran()
    {   
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
       
    }
    public function proses_pesanan()
    {   $is_processed = $this->ModelInvoice->index();
        if($is_processed){
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer');
        }else {
            echo " Maaf,Pesanan Anda gagal diproses!";
        }
    }
    public function detail($idproduk)
    {
        $data['produk'] = $this->ModelProduk->detail_prodk($idproduk);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_produk',$data);
        $this->load->view('templates/footer');
    }

} 
 ?>