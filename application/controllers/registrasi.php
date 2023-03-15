<?php 
class registrasi extends CI_Controller{
    public function index()
    {   $this->form_validation->set_rules('nama','Nama','required',[
            'required' => 'Nama wajib di isi !'
        ]);
        $this->form_validation->set_rules('username','Username','required',[
            'required' => 'Username wajib di isi !'
        ]);
        $this->form_validation->set_rules('email','Email','required',[
            'required' => 'Email wajib di isi !']);
        $this->form_validation->set_rules('password_1','Password','required',[
            'required' => 'Password wajib di isi !',
            'matches'  => 'Password tidak cocok'
        ],'required|matches[password_2]');
        $this->form_validation->set_rules('password_2','Password','required',[
            'required' => ' Password wajib di isi !',
            'matches'  => 'Password tidak cocok'
        ],  
            'required|matches[password_1]');
        $this->form_validation->set_rules('notelp','Notelp','required',[
            'required' => ' No Handphone wajib di isi !']);
        $this->form_validation->set_rules('alamat','alamat','required',[
            'required' => ' Alamat wajib di isi !']);
                
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        }else {
            $data = array(
                'userid'      => '',
                'namalengkap' => $this->input->post('nama'),
                'username'    => $this->input->post('username'),
                'email'       => $this->input->post('email'),
                'password'    => md5($this->input->post('password_1')),
                'notelp'      => $this->input->post('notelp'),
                'alamat'      => $this->input->post('alamat'),
                'role'        => 'Member',
            );
            $this->db->insert('login',$data);
            redirect('auth/login');
        }
    }
}
?>