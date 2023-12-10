<?php
class Review extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('ModelCars');
    }
    public function index() {
        if ($this->session->userdata('username')) {
            $this->load->view('templates/login_header');
        } else {
            $this->load->view('templates/header');
        }

        $data['review'] = $this->ModelCars->getReview();
        $data['tipe'] = $this->ModelCars->getTipe();
    

        $this->load->view('review/index', $data);
        $this->load->view('templates/footer');
    }
    
}

