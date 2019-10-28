<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == '') {
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "DASHBOARD LARACI";
        $this->load->view('template/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer', $data);
    }
}
