<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('kopma');
    }

    function index() {
        $this->load->view('login');
    }

    function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect();
        } else {
            $log = array(
                'username' => $this->input->post('username'),
                'password' => $this->encrypt->sha1($this->input->post('password'))
            );
            $login = $this->kopma->login($log); //kirim data ke database
            if ($login->status == 'admin') {
                $session = array(
                    'username' => $login->username,
                    'login' => TRUE,
                    'status' => 'admin'
                );
                $this->session->set_userdata($session);
                redirect('admin');
            } elseif ($login->status == 'petugas') {
                $session = array(
                    'username' => $login->username,
                    'login' => TRUE,
                    'status' => 'petugas'
                );
                $this->session->set_userdata($session);
                redirect('petugas');
            } else {
                redirect();
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect();
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>