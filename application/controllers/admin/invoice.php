<?php 
class Invoice extends CI_Controller{
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
            }
    }
    public function index()
    {
        $data['invoice'] = $this->ModelInvoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->ModelInvoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->ModelInvoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('templates_admin/footer');

    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['invoice'] = $this->ModelInvoice->edit($where,'invoice')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_invoice',$data);
        $this->load->view('templates_admin/footer');
    }
    
    public function konfirmasi()
    {
        $id             = $this->input->post('id');
        $konfrimasi     = $this->input->post('konfirmasi');
        $data = array(
            'id' => $id,
            'konfirmasi' => $konfrimasi,
        );
        $where = array('id' => $id);
        $this->ModelInvoice->update_data($where,$data,'invoice');
        redirect('admin/invoice/index');
        
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $data['invoice'] = $this->ModelInvoice->delete($where,'invoice');
        redirect('admin/invoice/index');
    }
}
?>