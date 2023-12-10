<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index(){
        if ($this->session->userdata('username')) {
            $this->load->view('templates/login_header');
        } else {
            $this->load->view('templates/header');
        }
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }


}