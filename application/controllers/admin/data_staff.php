<?php 
class data_staff extends CI_Controller{
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
        $data['login'] = $this->ModelStaff->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_staff',$data);
        $this->load->view('templates_admin/footer');
    }
    public function edit($userid)
    {
        $where = array('userid' => $userid);
        $data['login'] = $this->ModelStaff->edit($where,'login')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_staff',$data);
        $this->load->view('templates_admin/footer');

    }
    public function update(){
        $userid           = $this->input->post('userid');
        $nama             = $this->input->post('nama');
        $gender           = $this->input->post('gender');
        $alamat           = $this->input->post('alamat');
        $NoHp             = $this->input->post('notelp');
        $data = array
        (   'userid' => $userid,
            'namalengkap' => $nama,
            'gender' => $gender,
            'alamat' => $alamat,
            'notelp' => $NoHp,
        );
        $where = array('userid' => $userid);
        $this->ModelStaff->update($where,$data,'login');
        redirect('admin/data_staff/index');

    }
    public function hapus($userid)
    {
        $where = array('userid' => $userid);
        $data['login'] = $this->ModelStaff->hapus_data($where,'login');
        redirect('admin/data_staff/index');
    }

   
}
?>