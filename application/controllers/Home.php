<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('ModelCars');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            $this->load->view('templates/login_header');
        } else {
            $this->load->view('templates/header');
        }
        $data['review'] = $this->ModelCars->getReview();

        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

}