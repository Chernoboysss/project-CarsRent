<?php
class Autentifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('autentifikasi/login');
    }
    public function login()
    {
        if ($this->session->userdata('username')) {
            redirect('home');
        }

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim',
            [
                'required' => 'Username Harus diisi!!',
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password Harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('autentifikasi/login');
        } else {
            $this->_login();
        }
    }
    public function register()
    {
        if ($this->session->userdata('username')) {
            redirect('home/index');
        }
        $this->load->view('autentifikasi/registrasi');
    }
    // ini sementara langsung ke form login
    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $user = $this->ModelUser->cekData(['username' => $username])->row_array();
        //jika usernya ada
        if ($user) {
            //jika user sudah aktif
            //cek password
            if ($password == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 1) {
                    redirect('user/admin');
                } else {

                    redirect('home/index');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div 
class="alert alert-danger alert-message" role="alert">Password 
salah!!</div>');
                redirect('autentifikasi');
            }

            $this->session->set_flashdata('pesan', '<div 
class="alert alert-danger alert-message" role="alert">User belum 
diaktifasi!!</div>');
            redirect('autentifikasi');
        } else {
            $this->session->set_flashdata('pesan', '<div 
class="alert alert-danger alert-message" role="alert">Akun tidak 
terdaftar!!</div>');
            redirect('autentifikasi');
        }
    }
    //// controller dibawah untuk view dan input. yg diatas rencananya buat cek login


    public function inputRegister()
    {
        $nama = $this->input->post('nama') ? $this->input->post('nama') : null;
        $username = $this->input->post('username') ? $this->input->post('username') : null;
        $email = $this->input->post('email') ? $this->input->post('email') : null;
        $password = $this->input->post('password') ? $this->input->post('password') : null;
        // $password = md5($this->input->post('password')) ? $this->input->post('password') : null;
        $nohp = $this->input->post('nohp') ? $this->input->post('nohp') : null;

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'nohp' => $nohp
        );

        $this->db->insert('user', $data);
        redirect('autentifikasi');
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!</div>');
        redirect('autentifikasi');
    }
}
