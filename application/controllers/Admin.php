<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public function index(){
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/content1');
        $this->load->view('admin/content2');
        $this->load->view('admin/content3');
        $this->load->view('admin/content4');
        $this->load->view('admin/footer_admin');

    }
}