<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error404 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "404 Not Found";
        $this->output->set_status_header('404');
        $this->load->view('template/header', $data);
        $this->load->view('404/index', $data);
        $this->load->view('template/footer', $data);
    }
}
