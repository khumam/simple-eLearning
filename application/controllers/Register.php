<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['title'] = "Register | OPPIA";

        $this->form_validation->set_rules('register-fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('register-email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('register-password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('register/index', $data);
            $this->load->view('template/footer', $data);
        } else {
            $data = [
                'fullname' => htmlspecialchars($this->input->post('register-fullname'), true),
                'email' => htmlspecialchars($this->input->post('register-email'), true),
                'password' => password_hash($this->input->post('register-password'), PASSWORD_BCRYPT),
                'role' => 'user',
                'is_delete' => 0,
            ];

            $register = $this->crud->insertData($data, 'user');

            if ($register) {
                $this->session->set_flashdata('success', 'Registered Succesfully');
                redirect('login');
            } else {
                $this->session->set_flashdata('success', 'Register failed');
                redirect('register');
            }
        }
    }
}
