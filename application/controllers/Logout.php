<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{


    public function index()
    {
        $userdata = [
            'id_user',
            'fullname',
            'email',
            'role'
        ];

        $this->session->unset_userdata($userdata);

        $this->session->set_flashdata('success', 'Logout Successfully');
        redirect('login');
    }
}
