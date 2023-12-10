<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('ModelUser');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['review'] = $this->ModelUser->getReview();
            $data['total'] = $this->ModelUser->getTotal();
            $data['user'] = $this->ModelUser->getInfo();
            $this->load->view('templates/login_header');
            $this->load->view('user/profile', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('autentifikasi/login');
        }
    }
}
