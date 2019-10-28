<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['title'] = "Login | LARACI";

        $this->form_validation->set_rules('login-email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('login-password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('login/index', $data);
            $this->load->view('template/footer', $data);
        } else {
            $func = [
                'identifier' => [
                    'email' => htmlspecialchars($this->input->post('login-email'), true),
                ]
            ];

            $userdata = $this->crud->getData($func, 'user', true);

            if (password_verify($this->input->post('login-password'), $userdata['password'])) {
                $this->session->set_userdata(
                    [
                        'id_user' => $userdata['id_user'],
                        'fullname' => $userdata['fullname'],
                        'email' => $userdata['email'],
                    ]
                );
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('danger', 'Wrong password or email');
                redirect('login');
            }
        }
    }
}
