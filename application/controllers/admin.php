<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->model('kopma');
        $log = $this->session->all_userdata();
        if (!isset($log) || $log['login'] != TRUE || $log['status'] != 'admin') {
            redirect('home');
        }
    }

    function index() {
        redirect('admin/home');
    }

    function home() {
        $da = $this->session->userdata['username'];
        if ($this->kopma->get_user($da)) {
            $data['isi'] = $this->kopma->get_user($da);
        } else {
            $data['isi'] = array();
        }
        $this->load->view('template/header', $data);
        $this->load->view('admin/menu');
        $this->load->view('admin', $data);
        $this->load->view('template/footer');
    }

    function anggota() {
        $this->load->model('kopma');
        $data['hasil'] = $this->kopma->get_anggota();
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/anggota', $data);
        $this->load->view('template/footer');
    }

    function detail_anggota() {
        $nia = $this->uri->segment(3);
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = null;
        }
        if ($this->kopma->get_perkawinan()) {
            $data['kawin'] = $this->kopma->get_perkawinan();
        } else {
            $data['kawin'] = null;
        }
        if ($this->kopma->get_pendidikan()) {
            $data['pendidikan'] = $this->kopma->get_pendidikan();
        } else {
            $data['pendidikan'] = null;
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/detail_nia', $data);
        $this->load->view('template/footer');
    }

    function anggota_tambah() {
        if ($this->kopma->get_perkawinan()) {
            $data['perkawinan'] = $this->kopma->get_perkawinan();
        } else {
            $data['perkawinan'] = array();
        }
        if ($this->kopma->get_pendidikan()) {
            $data['pendidikan'] = $this->kopma->get_pendidikan();
        } else {
            $data['pendidikan'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/anggota_tambah', $data);
        $this->load->view('template/footer');
    }

    function anggota_insert() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('hp', 'No Hp', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('warga_negara', 'Warga Negara', 'required');
        $this->form_validation->set_rules('hobi', 'Hobi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('jenis_anggota', 'jenis Anggota', 'required');
        $this->form_validation->set_rules('id_perkawinan', 'Perkawinan', 'required');
        $this->form_validation->set_rules('id_pendidikan', 'Status Pendidikan', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        if ($this->form_validation->run() == FALSE) {
            if ($this->kopma->get_perkawinan()) {
                $data['perkawinan'] =
                        $this->kopma->get_perkawinan();
            } else {
                $data['perkawinan'] = array();
            }
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/anggota_tambah', $data);
            $this->load->view('template/footer');
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
                'id_pendidikan' => $this->input->post('id_pendidikan'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk')
            );
            $this->kopma->anggota_tambah($data);
            redirect('admin/anggota');
        }
    }

    function anggota_update() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('hp', 'No Hp', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('warga_negara', 'Warga Negara', 'required');
        $this->form_validation->set_rules('hobi', 'Hobi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('jenis_anggota', 'jenis Anggota', 'required');
        $this->form_validation->set_rules('id_perkawinan', 'Perkawinan', 'required');
        $this->form_validation->set_rules('id_pendidikan', 'Status Pendidikan', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/anggota_tambah');
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
                'id_pendidikan' => $this->input->post('id_pendidikan'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            );
            $this->kopma->anggota_update($nia);
            redirect('admin/anggota');
        }
    }

    function anggota_hapus($id) {
        $id = $this->uri->segment(3);
        $this->kopma->anggota_hapus($id);
        redirect('admin/anggota');
    }

    function simpanan() {
        $this->load->model('kopma');
        if ($this->kopma->get_simpanan()) {
            $data['smpn'] = $this->kopma->get_simpanan();
        } else {
            $data['smpn'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/simpanan', $data);
        $this->load->view('template/footer');
    }

    function simpanan_pokok() {
        $this->load->model('kopma');
        $data['jenis'] = $this->kopma->get_simpanan_pokok();
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/simpanan_pokok', $data);
        $this->load->view('template/footer');
    }

    function simpanan_wajib() {
        $this->load->model('kopma');
        $data['jenis'] = $this->kopma->get_simpanan_wajib();
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/simpanan_wajib', $data);
        $this->load->view('template/footer');
    }

    function simpanan_cari() {
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/cari_simpanan');
    }

    function simpanan_form_pokok() {
        $nia = $this->uri->segment(3);
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = null;
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/simpanan_form_pokok', $data);
        $this->load->view('template/footer');
    }

    function form_simpanan_pokok() {
        $id = $this->uri->segment(3); // untuk mengambil id simpanan dari url
        if ($this->kopma->getJenisSimpanan($id)) {
            $data['simpanan'] = $this->kopma->getJenisSimpanan($id);
        } else {
            $data['simpanan'] = array();
        }
        $nia = $this->uri->segment(5);
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/form_simpanan_pokok', $data);
        $this->load->view('template/footer');
    }

    function simpanan_form_wajib() {
        $nia = $this->uri->segment(3);
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = null;
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/simpanan_form_wajib', $data);
        $this->load->view('template/footer');
    }

    function form_simpanan_wajib() {
        $id = $this->uri->segment(3); // untuk mengambil id simpanan dari url
        $thn = $this->uri->segment(4);
        $nia = $this->uri->segment(5);
        if ($this->kopma->getJenisSimpanan($id)) {
            $data['simpanan'] = $this->kopma->getJenisSimpanan($id);
        } else {
            $data['simpanan'] = array();
        }
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['anggota'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['anggota'] = array();
        }
        if ($this->kopma->getSimpananWajib($id, $thn, $nia)) {
            $data['bayar'] = $this->kopma->getSimpananWajib($id, $thn, $nia);
        } else {
            $data['bayar'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/form_simpanan_wajib', $data);
        $this->load->view('template/footer');
    }

    function cari_simpanan() {
        $data['hasil'] = $this->kopma->cari_simpanan();
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/cari', $data);
        $this->load->view('template/footer');
    }

    function simpanan_insert() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('id_jenis_simpanan', 'Id Jenis Simpanan', 'required');
        $this->form_validation->set_rules('bulan', 'bulan', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/simpanan_tambah');
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
            redirect('admin/simpanan');
        }
    }

    //belum fix
    function simpanan_edit($id) {
        $id = $this->uri->segment(4);
        if ($this->kopma->pinjaman_edit($id)) {
            $data['pinjaman'] = $this->kopma->pinjaman_edit($id);
        } else {
            $data['pinjaman'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/pinjaman_edit', $data);
        $this->load->view('template/footer');
    }

    //belum fix
    function simpanan_update() {
        $this->form_validation->set_rules('id_pinjaman', 'ID Pinjaman', 'required');
        $this->form_validation->set_rules('nia', 'Nia', 'required');
        $this->form_validation->set_rules('value', 'Value', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/pinjaman_edit');
            $this->load->view('template/footer');
        } else {
            $pinjaman = array(
                'id_pinjaman' => $this->input->post('id_pinjaman'),
                'nia' => $this->input->post('nia'),
                'value' => $this->input->post('value'),
                'tanggal' => $this->input->post('tanggal')
            );
            $this->kopma->pinjaman_update($pinjaman);
            redirect('admin/pinjaman');
        }
    }

    function simpanan_hapus($id) {
        $id = $this->uri->segment(4);
        $this->kopma->simpanan_hapus($id);
        redirect(admin / simpanan);
    }

    function user() {
        $data['username'] = $this->session->userdata['username'];
        if ($this->kopma->user()) {
            $data['user'] = $this->kopma->user();
        } else {
            $data['user'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/user', $data);
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
        $this->load->view('admin/menu');
        $this->load->view('admin/profile', $data);
        $this->load->view('template/footer');
    }

    function profile_edit() {
        $id = $this->uri->segment(3);
        if ($this->kopma->get_user_id($id)) {
            $data['user'] = $this->kopma->get_user_id($id);
        } else {
            $data['user'] = array();
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/profile_edit', $data);
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
            redirect('admin/profile');
        }
    }

    function user_tambah() {
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/user_tambah');
        $this->load->view('template/footer');
    }

    function user_insert() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $user = array(
                'username' => $this->input->post('username'),
                'password' => $this->encrypt->sha1($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'status' => $this->input->post('status')
            );
            $this->kopma->user_tambah($user);
            redirect('admin/user');
        }
    }

    function user_edit() {
        $id = $this->uri->segment(3);
        if ($this->kopma->get_user_id($id)) {
            $data['user'] = $this->kopma->get_user_id($id);
        } else {
            $data['user'] = array();
        }
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/user_edit', $data);
        $this->load->view('template/footer');
    }

    function user_update() {
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
            redirect('admin/user');
        }
    }

    function user_hapus($id) {
        $id = $this->uri->segment(3);
        $this->kopma->user_hapus($id);
        redirect('admin/user');
    }

    function cari_nia() {

        $data['hasil'] = $this->kopma->cari_nia();
        if ($data['hasil'] == null) {
            echo"maaf data yang di tampilkan tidak ada";
        } else {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/cari', $data);
            $this->load->view('template/footer');
        }
    }

    function perkawinan() {
        if ($this->kopma->get_perkawinan()) {
            $data['perkawinan'] = $this->kopma->get_perkawinan();
        } else {
            $data['perkawianan'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/tes', $data);
        $this->load->view('template/footer');
    }

    function pinjaman() {
        if ($this->kopma->get_pinjaman()) {
            $data['pinjaman'] = $this->kopma->get_pinjaman();
        } else {
            $data['pinjaman'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/pinjaman', $data);
        $this->load->view('template/footer');
    }

    function pinjaman_insert() {
        $this->form_validation->set_rules('nia', 'NIA', 'required');
        $this->form_validation->set_rules('value', 'value', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/form_pinjaman');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'nia' => $this->input->post('nia'),
                'value' => $this->input->post('value'),
                'sisa' => $this->input->post('value'),
                'username' => $this->session->userdata('username')
            );
            $this->kopma->pinjaman_tambah($data);
            redirect('admin/pinjaman');
        }
    }

    function pinjaman_cari() {
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/cari_pinjaman');
    }

    function cari_pinjaman() {
        $data['hasil'] = $this->kopma->cari_pinjaman();
        if ($data['hasil'] == null) {
            redirect('admin/noResult');
        } else {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/cari2', $data);
            $this->load->view('template/footer');
        }
    }

    function pinjaman_edit($id) {
        $id = $this->uri->segment(3);
        if ($this->kopma->pinjaman_edit($id)) {
            $data['pinjaman'] = $this->kopma->pinjaman_edit($id);
        } else {
            $data['pinjaman'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/pinjaman_edit', $data);
        $this->load->view('template/footer');
    }

    function pinjaman_update() {
        $this->form_validation->set_rules('id_pinjaman', 'ID Pinjaman', 'required');
        $this->form_validation->set_rules('nia', 'Nia', 'required');
        $this->form_validation->set_rules('value', 'Value', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/pinjaman_edit');
            $this->load->view('template/footer');
        } else {
            $pinjaman = array(
                'id_pinjaman' => $this->input->post('id_pinjaman'),
                'nia' => $this->input->post('nia'),
                'value' => $this->input->post('value'),
                'tanggal' => $this->input->post('tanggal')
            );
            $this->kopma->pinjaman_update($pinjaman);
            redirect('admin/pinjaman');
        }
    }

    function pinjaman_hapus($id) {
        $id = $this->uri->segment(3);
        $this->kopma->pinjaman_hapus($id);
        redirect('admin/pinjaman');
    }

//    
//    function pinjaman_form() {
//        $nia = $this->uri->segment(3);
//        if ($data['nia'] = $this->kopma->get_anggota_nia($nia)) {
//            $data['nia'] = $this->kopma->get_anggota_nia($nia);
//        } else {
//            $data['nia'] = null;
//        }
//        $data['username'] = $this->session->userdata('username');
//        $this->load->view('template/header');
//        $this->load->view('template/menu');
//        $this->load->view('admin/simpanan_form_wajib', $data);
//        $this->load->view('template/footer');
//    }

    function form_pinjaman($nia) {
        if ($this->kopma->get_anggota_nia($nia)) {
            $data['nia'] = $this->kopma->get_anggota_nia($nia);
        } else {
            $data['nia'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/form_pinjaman', $data);
        $this->load->view('template/footer');
    }

    function angsuran() {
        if ($this->kopma->get_angsuran()) {
            $data['angsuran'] = $this->kopma->get_angsuran();
        } else {
            $data['angsuran'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/angsuran', $data);
        $this->load->view('template/footer');
    }

    function cari_angsuran() {
        $c = $this->input->post('cari');
        if ($this->kopma->cari_simpanan($c)) {
            $data['hasil'] = $this->kopma->cari_simpanan($c);
        } else {
            $data['hasil'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/cari_angsuran2', $data);
        $this->load->view('template/footer');
    }

    function cari_angsuran_form() {
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/cari_angsuran');
        $this->load->view('template/footer');
    }

    function form_angsuran() {
        $id = $this->uri->segment(3);
        if ($this->kopma->getAngsuran($id)) {
            $data['pinjaman'] = $this->kopma->getAngsuran($id);
        } else {
            $data['pinjaman'] = null;
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/form_angsuran', $data);
        $this->load->view('template/footer');
    }

    function angsuran_insert() {
        $this->form_validation->set_rules('value', 'value', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/form_pinjaman');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_pinjaman' => $this->input->post('id'),
                'value' => $this->input->post('value'),
                'username' => $this->session->userdata('username')
            ); //menyimpan semua inputan user ke dalam array
            $id = $this->input->post('id'); //menangkap id pinjaman dan disimpan sementara ke variabel $id
            $dat = $this->kopma->getPinjaman($id); //mengambil data pinjaman anggota berdasarkan id pinjaman di tabel pinjaman
            $asli = $dat[0]->sisa; //menyimpan sementara data sisa pinjaman anggota ke variabel $asli
            if ($asli > 0) { // mengecak sudah lunas atau belum hutangnya,jika value $asli = 0,berati sudah lunas dan diredirect ke admin/lunas,jika belum berarti menginsert ke tabel angsuran dan mengupdate value sisa di tabel pinjaman
                $this->kopma->angsuran_tambah($data); //menyimpan angsuran ke dalam tabel angsuran
                $sisa = $asli - $data['value']; //proses pengurangan pinjaman dan disimpan sementara di variabel $sisa,selanjutnya dipergunakan untuk mengupdate value coloum sisa di tabel pinjaman
                $set = array(
                    'sisa' => $sisa
                );
                $this->kopma->updateSisa($id, $set);
                redirect('admin/angsuran');
            } else {
                redirect('admin/lunas');
            }
        }
    }

    function angsuran_edit($id) {
        $id = $this->uri->segment(3);
        if ($this->kopma->angsuran_edit($id)) {
            $data['angsuran'] = $this->kopma->angsuran_edit($id);
        } else {
            $data['angsuran'] = array();
        }
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/angsuran_edit', $data);
        $this->load->view('template/footer');
    }

    function angsuran_update() {
        $this->form_validation->set_rules('id_pinjaman', 'Id Pinjaman', 'required');
        $this->form_validation->set_rules('value', 'value', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/pinjaman_edit');
            $this->load->view('template/footer');
        } else {
            $pinjaman = array(
                'id_pinjaman' => $this->input->post('id_pinjaman'),
                'value' => $this->input->post('value'),
                'tanggal' => $this->input->post('tanggal')
            );
            $this->kopma->angsuran_update($pinjaman);
            redirect('admin/angsuran');
        }
    }

    function laporan_anggota() {
        $this->load->model('kopma');
        $data['hasil'] = $this->kopma->get_anggota();
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/laporan_anggota', $data);
        $this->load->view('template/footer');
    }

    function laporan_simpanan() {
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/laporan_simpanan');
        $this->load->view('template/footer');
    }

    function laporan_pinjaman() {
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/laporan_pinjaman');
        $this->load->view('template/footer');
    }

    function laporan_angsuran() {
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/laporan_angsuran');
        $this->load->view('template/footer');
    }

    function simpanan_wajib_tambah() {
        $nia = $this->input->post('nia');
        $jenis = $this->input->post('simpanan');
        $bulan = $this->input->post('bln');
        $thn = date('Y');
        foreach ($bulan as $bln) {
            $cek = $this->kopma->cekWajib($nia, $bln, $thn);
            if ($cek > 0) {
                redirect('admin/sudahBayarWajib');
            } else {
                $post = array(
                    'nia' => $nia,
                    'id_jenis_simpanan' => $jenis,
                    'bulan' => $bln,
                    'tahun' => $thn
                );
                $this->kopma->simpananWajibSave($post);
            }
        }
        redirect('admin/simpanan');
    }

    function simpanan_pokok_tambah() { // tahun lenghtnya jadi
        $nia = $this->input->post('nia');
        $jenis = $this->input->post('simpanan');
        $tahun = date('Y');
        $cek = $this->kopma->cekPokok($nia, $jenis, $tahun);
        if ($cek > 0) {
            redirect('admin/sudahBayarPokok');
        } else {
            $post = array(
                'nia' => $nia,
                'id_jenis_simpanan' => $jenis,
                'bulan' => 0,
                'tahun' => $tahun
            );
            $this->kopma->simpananWajibSave($post);
            redirect('admin/simpanan');
        }
    }

    function sudahBayarWajib() {
        $data['isi'] = 'Transaksi tidak dapat dilanjutkan, bulan yang anda pilih sudah dibayar sebelumnya.';
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->parser->parse('admin/alert', $data);
        $this->load->view('template/footer');
    }

    function sudahBayarPokok() {
        $data['isi'] = 'Transaksi tidak dapat dilanjutkan, ID ini sudah membayar Simpanan Pokok.';
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->parser->parse('admin/alert', $data);
        $this->load->view('template/footer');
    }

    function noResult() {
        $data['isi'] = '<div class="alert alert-error">ID user tidak valid.</div>';
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->parser->parse('admin/alert', $data);
        $this->load->view('template/footer');
    }

    function lunas() {
        $data['isi'] = '<div class="alert alert-info">Pinjaman user ini telah Lunas.</div>';
        $this->load->view('template/header');
        $this->load->view('admin/menu');
        $this->parser->parse('admin/alert', $data);
        $this->load->view('template/footer');
    }

}

?>
