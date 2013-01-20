<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detail extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->model('kopma');
        $log = $this->session->all_userdata();
        if (!isset($log) || $log['login'] != TRUE || $log['id_user'] != 1) {
            redirect('admin/logout');
        }
    }

    

}

?>
