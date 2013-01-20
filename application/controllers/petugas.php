<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Petugas extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->model('kopma');
        $log = $this->session->all_userdata();
        if (!isset($log) || $log['login'] != TRUE || $log['status'] != 'petugas') {
            redirect('home/logout');
        }
    }

    function index() {
        redirect('petugas/home');
    }

    function home() {
        $da = $this->session->userdata['username'];
        if ($this->kopma->get_user($da)) {
            $data['isi'] = $this->kopma->get_user($da);
        } else {
            $data['isi'] = array();
        }
        $this->load->view('template/header', $data);
        $this->load->view('petugas/menu');
        $this->load->view('petugas', $data);
        $this->load->view('template/footer');
    }

    function profile() {
        $da = $this->session->userdata['username'];
        if ($this->kopma->get_user($da)) {
            $data['user'] = $this->kopma->get_user($da);
        } else {
            $data['user'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/profile', $data);
        $this->load->view('template/footer');
    }

     function profile_edit() {
        $id = $this->uri->segment(3);
        if ($data['user'] = $this->kopma->get_user_id($id)) {
            $data['user'] = $this->kopma->get_user_id($id);
        } else {
            $data['user'] = array();
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/profile_edit', $data);
        $this->load->view('template/footer');
    }

      function profile_update() {
        $this->form_validation->set_rules('id_user', 'required');
        $this->form_validation->set_rules('username', 'required');
        $this->form_validation->set_rules('password', 'required');
        $this->form_validation->set_rules('nama', 'required');
        $this->form_validation->set_rules('no_hp', 'required');
        $this->form_validation->set_rules('status', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('admin/user');
        } else {
            $user = array(
                'id_user' => $this->input->post('id_user'),
                'username' => $this->input->post('username'),
                'password' => $this->encrypt->sha1($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'status' => $this->input->post('status')
            );
            $this->kopma->user_update($user);
            redirect('petugas/profile');
        }
    }

    function anggota() {
        $this->load->model('kopma');
        $data['hasil'] = $this->kopma->get_anggota();
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/anggota', $data);
        $this->load->view('template/footer');
    }

    function detail_anggota() {
        $nia = $this->uri->segment(3);
        if ($data['nia'] = $this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = null;
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/detail_nia', $data);
        $this->load->view('template/footer');
    }

    function anggota_insert() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
        $this->form_validation->set_rules('provinsi', 'provinsi', 'required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('hp', 'No Hp', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('warga_negara', 'Warga Negara', 'required');
        $this->form_validation->set_rules('hobi', 'Hobi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('jenis_anggota', 'jenis Anggota', 'required');
        $this->form_validation->set_rules('id_perkawinan', 'Perkawinan', 'required');
        $this->form_validation->set_rules('status_pendidikan', 'Status Pendidikan', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = array(
                'nia' => $this->input->post('nia'),
                'no_ktp' => $this->input->post('no_ktp'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat_lengkap' => $this->input->post('alamat_lengkap'),
                'kode_pos' => $this->input->post('kode_pos'),
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kota' => $this->input->post('kota'),
                'no_npwp' => $this->input->post('no_npwp'),
                'telp' => $this->input->post('telp'),
                'hp' => $this->input->post('hp'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'warga_negara' => $this->input->post('warga_negara'),
                'hobi' => $this->input->post('hobi'),
                'status' => $this->input->post('status'),
                'jenis_anggota' => $this->input->post('jenis_anggota'),
                'id_perkawinan' => $this->input->post('id_perkawinan'),
                'status_pendidikan' => $this->input->post('status_pendidikan'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk')
            );
            $this->kopma->anggota_tambah($data);
            redirect('petugas/anggota');
        }
    }

    function anggota_tambah() {
        if ($this->kopma->get_perkawinan()) {
            $data['perkawinan'] = $this->kopma->get_perkawinan();
        } else {
            $data['perkawinan'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/anggota_tambah', $data);
        $this->load->view('template/footer');
    }

    function anggota_update() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
        $this->form_validation->set_rules('provinsi', 'provinsi', 'required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('hp', 'No Hp', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('warga_negara', 'Warga Negara', 'required');
        $this->form_validation->set_rules('hobi', 'Hobi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('jenis_anggota', 'jenis Anggota', 'required');
        $this->form_validation->set_rules('id_perkawinan', 'Perkawinan', 'required');
        $this->form_validation->set_rules('status_pendidikan', 'Status Pendidikan', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('petugas/menu');
            $this->load->view('petugas/anggota_tambah');
            $this->load->view('template/footer');
        } else {
            $nia = array(
                'nia' => $this->input->post('nia'),
                'no_ktp' => $this->input->post('no_ktp'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat_lengkap' => $this->input->post('alamat_lengkap'),
                'kode_pos' => $this->input->post('kode_pos'),
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kota' => $this->input->post('kota'),
                'no_npwp' => $this->input->post('no_npwp'),
                'telp' => $this->input->post('telp'),
                'hp' => $this->input->post('hp'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'warga_negara' => $this->input->post('warga_negara'),
                'hobi' => $this->input->post('hobi'),
                'status' => $this->input->post('status'),
                'jenis_anggota' => $this->input->post('jenis_anggota'),
                'id_perkawinan' => $this->input->post('id_perkawinan'),
                'status_pendidikan' => $this->input->post('status_pendidikan'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            );
            $this->kopma->anggota_update($nia);
            redirect('petugas/anggota');
        }
    }

    function anggota_hapus($id) {
        $id = $this->uri->segment(3);
        $this->kopma->anggota_hapus($id);
        redirect('petugas/anggota');
    }

    function simpanan() {
        $this->load->model('kopma');
        $data['smpn'] = $this->kopma->get_simpanan();
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/simpanan', $data);
        $this->load->view('template/footer');
    }

    function simpanan_pokok() {
        $this->load->model('kopma');
        $data['jenis'] = $this->kopma->get_simpanan_pokok();
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/simpanan_pokok', $data);
        $this->load->view('template/footer');
    }

    function simpanan_wajib() {
        $this->load->model('kopma');
        $data['jenis'] = $this->kopma->get_simpanan_wajib();
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/simpanan_wajib', $data);
        $this->load->view('template/footer');
    }

    function simpanan_cari() {
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/cari_simpanan');
    }

    function simpanan_form_wajib() {
        $nia = $this->uri->segment(3);
        if ($data['nia'] = $this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = null;
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/simpanan_form_wajib', $data);
        $this->load->view('template/footer');
    }

    function form_simpanan_wajib($nia) {
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/form_simpanan_wajib', $data);
    }

    function cari_simpanan() {

        $data['hasil'] = $this->kopma->cari_simpanan();
        if ($data['hasil'] == null) {
            echo"maaf data yang di tampilkan tidak ada";
        } else {
            $this->load->view('template/header');
            $this->load->view('petugas/menu');
            $this->load->view('petugas/cari', $data);
            $this->load->view('template/footer');
        }
    }

    function simpanan_insert() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('id_jenis_simpanan', 'Id Jenis Simpanan', 'required');
        $this->form_validation->set_rules('bulan', 'bulan', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('petugas/menu');
            $this->load->view('petugas/simpanan_tambah');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nia' => $this->input->post('nia'),
                'id_jenis_simpanan' => $this->input->post('id_jenis_simpanan'),
                'bulan' => $this->input->post('bulan'),
                'tahun' => $this->input->post('tahun'),
                'tanggal' => $this->input->post('tanggal')
            );
            $this->kopma->anggota_tambah($data);
            redirect('petugas/simpanan');
        }
    }

    function simpanan_tambah() {
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/simpanan_tambah');
        $this->load->view('template/footer');
//        } else {
//            $data = array(
//                'nia' => $this->input->post('nia'),
//                'id_jenis_simpanan' => $this->input->post('id_jenis_simpanan'),
//                'bulan' => $this->input->post('bulan'),
//                'tahun' => $this->input->post('tahun'),
//                'tanggal' => $this->input->post('tanggal')
//            );
//            $this->kopma->anggota_tambah($data);
//            redirect('admin/simpanan');
//        }
    }

    function cari_pinjaman() {
        $data['hasil'] = $this->kopma->cari_pinjaman();
        if ($data['hasil'] == null) {
            echo"maaf data yang di tampilkan tidak ada";
        } else {
            $this->load->view('template/header');
            $this->load->view('petugas/menu');
            $this->load->view('petugas/cari2', $data);
            $this->load->view('template/footer');
        }
    }

    function pinjaman_cari() {
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/cari_pinjaman');
    }

    function form_pinjaman($nia) {
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/form_pinjaman', $data);
        $this->load->view('template/footer');
    }

    function pinjaman() {
        $this->load->model('kopma');
        $data['hasil'] = $this->kopma->get_pinjaman();
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/pinjaman', $data);
        $this->load->view('template/footer');
    }

    function pinjaman_insert() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('value', 'value', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('petugas/menu');
            $this->load->view('petugas/form_pinjaman');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nia' => $this->input->post('nia'),
                'value' => $this->input->post('value'),
                'tanggal' => $this->input->post('tanggal')
            );
            $this->kopma->pinjaman_tambah($data);
            redirect('petugas/pinjaman');
        }
    }

    function pinjaman_edit($id) {
        $id = $this->uri->segment(3);
        if ($data['pinjaman'] = $this->kopma->pinjaman_edit($id)) {
            $data['pinjaman'] = $this->kopma->pinjaman_edit($id);
        } else {
            $data['pinjaman'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/pinjaman_edit', $data);
        $this->load->view('template/footer');
    }

    function pinjaman_update() {
        $this->form_validation->set_rules('id_pinjaman', 'ID Pinjaman', 'required');
        $this->form_validation->set_rules('nia', 'Nia', 'required');
        $this->form_validation->set_rules('value', 'Value', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('petugas/menu');
            $this->load->view('petugas/pinjaman_edit');
            $this->load->view('template/footer');
        } else {
            $pinjaman = array(
                'id_pinjaman' => $this->input->post('id_pinjaman'),
                'nia' => $this->input->post('nia'),
                'value' => $this->input->post('value'),
                'tanggal' => $this->input->post('tanggal')
            );
            $this->kopma->pinjaman_update($pinjaman);
            redirect('petugas/pinjaman');
        }
    }

    function pinjaman_hapus($id) {
        $id = $this->uri->segment(3);
        $this->kopma->pinjaman_hapus($id);
        redirect('petugas/pinjaman');
    }

    function angsuran() {
        $this->load->model('kopma');
        $data['angsuran']= $this->kopma->get_angsuran();
        $this->load->view('template/header');
        $this->load->view('petugas/menu');
        $this->load->view('petugas/angsuran',$data);
        $this->load->view('template/footer');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('home/login');
    }

}

?>
