<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('id_user') == '') {
            $this->session->set_flashdata('danger', 'Please signup first.');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "DASHBOARD";
        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function users()
    {

        $data['title'] = "DASHBOARD";

        $func = [
            'identifier' => [
                'is_delete' => 0
            ],
            'order_by' => [
                'id_user', 'desc'
            ]
        ];

        $data['users'] = $this->crud->getData($func, 'user', false);

        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/users', $data);
        $this->load->view('template/footer', $data);
    }

    public function kelas()
    {

        $data['title'] = "DASHBOARD";

        $func = [
            'identifier' => [
                'del' => 0
            ],
            'order_by' => [
                'id', 'desc'
            ]
        ];

        $data['classes'] = $this->crud->getData($func, 'class', false);

        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/kelas', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambahkelas()
    {

        $data['title'] = "DASHBOARD";

        $this->form_validation->set_rules('dashboard-tambahkelas-nama', 'Nama Kelas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/aside', $data);
            $this->load->view('dashboard/tambahkelas', $data);
            $this->load->view('template/footer', $data);
        } else {

            $config['upload_path']          = './assets/uploads/cover/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 500;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $config['file_name']            = md5($this->input->post('dashboard-tambahkelas-nama'));
            $config['overwrite']            = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('dashboard-kelas-cover')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('danger', implode("|", $error));
                redirect('dashboard/tambahkelas');
            } else {
                $data = [
                    'user_id' => htmlspecialchars($this->input->post('dashboard-tambahkelas-iduser'), true),
                    'class_name' => htmlspecialchars($this->input->post('dashboard-tambahkelas-nama'), true),
                    'description' => htmlspecialchars($this->input->post('dashboard-tambahkelas-deskripsi'), true),
                    'cover' => $this->upload->data('file_name'),
                    'level' => htmlspecialchars($this->input->post('dashboard-tambahkelas-level'), true),
                    'del' => 0,
                ];

                $insert = $this->crud->insertData($data, 'class');
                if ($insert) {
                    $this->session->set_flashdata('success', 'Class added Successfully');
                    redirect('dashboard/kelas');
                } else {
                    $this->session->set_flashdata('danger', 'Failed to add new class bro');
                    redirect('dashboard/tambahkelas');
                }
            }
        }
    }

    public function editkelas($id)
    {

        $data['title'] = "DASHBOARD";
        $func['identifier'] = [
            'id' => $id,
            'del' => 0,
        ];
        $data['class'] = $this->crud->getData($func, 'class', true);

        $this->form_validation->set_rules('dashboard-tambahkelas-nama', 'Nama Kelas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/aside', $data);
            $this->load->view('dashboard/editkelas', $data);
            $this->load->view('template/footer', $data);
        } else {
            $config['upload_path']          = './assets/uploads/cover/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 500;
            $config['file_name']            = md5($this->input->post('dashboard-tambahkelas-nama'));
            $config['overwrite']            = true;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('dashboard-kelas-cover')) {
                $data = [
                    'class_name' => htmlspecialchars($this->input->post('dashboard-tambahkelas-nama'), true),
                    'description' => htmlspecialchars($this->input->post('dashboard-tambahkelas-deskripsi'), true),
                    'level' => htmlspecialchars($this->input->post('dashboard-tambahkelas-level'), true),
                    'del' => 0,
                ];

                $func['identifier'] = [
                    'id' => $id
                ];


                $insert = $this->crud->updateData($data, $func, 'class');
                if ($insert) {
                    $this->session->set_flashdata('success', 'Class edited Successfully');
                    redirect('dashboard/kelas');
                } else {
                    $this->session->set_flashdata('danger', 'Failed to edit new class');
                    redirect('dashboard/tambahkelas');
                }
            } else {

                $data = [
                    'class_name' => htmlspecialchars($this->input->post('dashboard-tambahkelas-nama'), true),
                    'description' => htmlspecialchars($this->input->post('dashboard-tambahkelas-deskripsi'), true),
                    'cover' => $this->upload->data('file_name'),
                    'level' => htmlspecialchars($this->input->post('dashboard-tambahkelas-level'), true),
                    'del' => 0,
                ];

                $func['identifier'] = [
                    'id' => $id
                ];


                $insert = $this->crud->updateData($data, $func, 'class');
                if ($insert) {
                    $this->session->set_flashdata('success', 'Class edited Successfully');
                    redirect('dashboard/kelas');
                } else {
                    $this->session->set_flashdata('danger', 'Failed to edit new class');
                    redirect('dashboard/tambahkelas');
                }
            }
        }
    }

    private function _addCover()
    {
        $config['upload_path']          = './assets/uploads/cover/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['file_name']            = md5($this->input->post('dashboard-tambahkelas-nama'));
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('dashboard-kelas-cover')) {
            $error = array('error' => $this->upload->display_errors());
            return false;
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function tambahsubyek($id)
    {

        $data['title'] = "DASHBOARD";
        $func['identifier'] = [
            'id' => $id,
            'del' => 0,
        ];
        $data['class'] = $this->crud->getData($func, 'class', true);

        $this->form_validation->set_rules('dashboard-tambahkelas-nama', 'Nama Kelas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/aside', $data);
            $this->load->view('dashboard/addsubyek', $data);
            $this->load->view('template/footer', $data);
        } else {

            $data = [
                'class_id' => $id,
                'subyek_name' => htmlspecialchars($this->input->post('dashboard-tambahkelas-nama'), true),
                'description' => htmlspecialchars($this->input->post('dashboard-tambahkelas-deskripsi'), true),
                'content' => $this->input->post('dashboard-tambahkelas-content'),
                'url_video' => htmlspecialchars($this->input->post('dashboard-kelas-video'), true),
                'del' => 0,
            ];

            $insert = $this->crud->insertData($data, 'materi');

            if ($insert) {
                $this->session->set_flashdata('success', 'Subyek added Successfully');
                redirect('dashboard/admindetail/' . $id);
            } else {
                $this->session->set_flashdata('danger', 'Failed to add new subyek');
                redirect('dashboard/tambahsubyek/' . $id);
            }
        }
    }

    public function editsubyek($id_class, $id)
    {

        $data['title'] = "DASHBOARD";
        $func['identifier'] = [
            'id' => $id_class,
            'del' => 0,
        ];
        $data['class'] = $this->crud->getData($func, 'class', true);
        $mat['identifier'] = [
            'id' => $id,
            'del' => 0,
        ];
        $data['materi'] = $this->crud->getData($mat, 'materi', true);


        $this->form_validation->set_rules('dashboard-tambahkelas-nama', 'Nama Kelas', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/aside', $data);
            $this->load->view('dashboard/editsubyek', $data);
            $this->load->view('template/footer', $data);
        } else {

            $data = [
                'subyek_name' => htmlspecialchars($this->input->post('dashboard-tambahkelas-nama'), true),
                'description' => htmlspecialchars($this->input->post('dashboard-tambahkelas-deskripsi'), true),
                'content' => $this->input->post('dashboard-tambahkelas-content'),
                'url_video' => htmlspecialchars($this->input->post('dashboard-kelas-video'), true),
                'del' => 0,
            ];


            $insert = $this->crud->updateData($data, $mat, 'materi');

            if ($insert) {
                $this->session->set_flashdata('success', 'Subyek edited Successfully');
                redirect('dashboard/admindetail/' . $id_class);
            } else {
                $this->session->set_flashdata('danger', 'Failed to edit new subyek');
                redirect('dashboard/editsubyek/' . $id_class . '/' . $id);
            }
        }
    }

    public function katalog()
    {
        $data['title'] = "DASHBOARD";

        $func = [
            'identifier' => [
                'del' => 0
            ],
            'order_by' => [
                'id', 'desc'
            ]
        ];

        $data['classes'] = $this->crud->getData($func, 'class', false);

        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/katalog', $data);
        $this->load->view('template/footer', $data);
    }

    public function detail($id)
    {

        $data['title'] = "DASHBOARD";

        $func = [
            'identifier' => [
                'del' => 0,
                'id' => $id
            ],
            'order_by' => [
                'id', 'desc'
            ]
        ];

        $mat['identifier'] = [
            'del' => 0,
            'class_id' => $id,
        ];

        $datakelas['identifier'] = [
            'id_user' => $this->session->userdata('id_user'),
        ];

        $data['kelasku'] = $this->crud->getData($datakelas, 'myclass', false);
        foreach ($data['kelasku'] as $kls) {
            $data['list_kelasku'][] = $kls['id_class'];
        }

        // print_r($data['list_kelasku']);
        // die;

        $data['class'] = $this->crud->getData($func, 'class', true);
        $data['materials'] = $this->crud->getData($mat, 'materi', false);

        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/detail', $data);
        $this->load->view('template/footer', $data);
    }

    public function admindetail($id)
    {

        $data['title'] = "DASHBOARD";

        $func = [
            'identifier' => [
                'del' => 0,
                'id' => $id
            ],
            'order_by' => [
                'id', 'desc'
            ]
        ];

        $mat['identifier'] = [
            'del' => 0,
            'class_id' => $id,
        ];

        $datakelas['identifier'] = [
            'id_user' => $this->session->userdata('id_user'),
        ];

        $data['kelasku'] = $this->crud->getData($datakelas, 'myclass', false);
        foreach ($data['kelasku'] as $kls) {
            $data['list_kelasku'][] = $kls['id_class'];
        }

        // print_r($data['list_kelasku']);
        // die;

        $data['class'] = $this->crud->getData($func, 'class', true);
        $data['materials'] = $this->crud->getData($mat, 'materi', false);

        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/admindetail', $data);
        $this->load->view('template/footer', $data);
    }

    public function playcourse($id_kelas, $id_materi)
    {
        $func['identifier'] = [
            'id' => $id_materi,
            'del' => 0,
        ];
        $func2['identifier'] = [
            'class_id' => $id_kelas,
            'del' => 0,
        ];

        $data['materi'] = $this->crud->getData($func, 'materi', true);
        $data['materis'] = $this->crud->getData($func2, 'materi', false);

        $data['title'] = $data['materi']['subyek_name'];

        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/play', $data);
        $this->load->view('template/footer', $data);
    }

    public function daftarkelas($id)
    {
        $insert = [
            'id_user' => $this->session->userdata('id_user'),
            'id_class' => $id,
            'del' => 0
        ];

        $up = $this->crud->insertData($insert, 'myclass');

        if ($up) {
            redirect('dashboard/kelasku');
        } else {
            redirect('dashboard/katalog');
        }
    }

    public function kelasku()
    {
        $datakelas['identifier'] = [
            'id_user' => $this->session->userdata('id_user'),
            'del' => 0
        ];

        $data['kelasku'] = $this->crud->getData($datakelas, 'myclass', false);

        if (count($data['kelasku']) > 0) {
            foreach ($data['kelasku'] as $id_class) {
                $func['identifier'] = [
                    'id' => $id_class['id_class'],
                ];

                // $del['identifier'] = ['del' => 0];

                $data['classes'][] = $this->crud->getData($func, 'class', false);
            }
            $data['classes'] = array_reverse($data['classes']);
        }

        // print_r($data['classes']);


        $data['title'] = 'Kelasku';

        $this->load->view('template/header', $data);
        $this->load->view('template/aside', $data);
        $this->load->view('dashboard/myclass', $data);
        $this->load->view('template/footer', $data);
    }

    public function hapuskelas($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            redirect('dashboard');
        }

        $func['identifier'] = [
            'id' => $id
        ];
        $del['identifier'] = [
            'id_class' => $id
        ];

        $data = [
            'del' => 1
        ];

        $hapus = $this->crud->updateData($data, $func, 'class');
        $hapus_myclass = $this->crud->updateData($data, $del, 'myclass');

        if ($hapus && $hapus_myclass) {
            redirect('dashboard/kelas');
        }
    }
}
