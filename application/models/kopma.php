<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kopma extends Model {

    function login($log) {
        $this->db->where('username', $log['username']);
        $this->db->where('password', $log['password']);
        $data = $this->db->get('user');
        if ($data->num_rows == 1) {
            return $data->row();
        } else {
            return FALSE;
        }
    }

    function get_anggota() {
        $get = $this->db->get('vanggota');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function get_anggota_nia($nia) {
        $this->db->where('nia', $nia);
        $get = $this->db->get("vanggota order by 'nia'");
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function anggota_tambah($data) {
        $this->db->insert('anggota', $data);
    }

    function anggota_update($nia) {
        $this->db->where('nia', $nia['nia']);
        $this->db->update('anggota', $nia);
    }

    function anggota_hapus($id) {
        $this->db->where('nia', $id);
        $this->db->delete('anggota');
    }

    function get_user($da) {
        $this->db->where('username', $da);
        $get = $this->db->get('user');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function get_user_id($id) {
        $this->db->where('id_user', $id);
        $get = $this->db->get('user');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function user() {
        $data = $this->db->query("select * from user where status='petugas'");
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function user_tambah($data) {
        $this->db->insert('user', $data);
    }

    function user_edit($id) {
        $this->db->where('id_user', $id);
        $data = $this->db->get('user');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

//    function pinjaman($id) {
//        $this->db->where('id_pinjaman', $id);
//        $data = $this->db->get('vpinjaman');
//        if ($data->num_rows > 0) {
//            return $data->result();
//        }
//    }
//    function angsuran($nia){
//        $this->db->where('')
//    }

    function pinjaman_update($pinjaman) {
        $this->db->where('id_pinjaman', $pinjaman['id_pinjaman']);
        $this->db->update('pinjaman', $pinjaman);
    }

    function user_update($user) {
        $this->db->where('id_user', $user['id_user']);
        $this->db->update('user', $user);
    }

    function user_hapus($id) {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    function get_perkawinan() {
        $get = $this->db->get('status_perkawinan');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function get_simpanan() {
        $get = $this->db->get('vsimpanan');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function get_simpanan_pokok() {
        $get = $this->db->get('vsimpanan_pokok');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function get_simpanan_wajib() {
        $get = $this->db->get('vsimpanan_wajib');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function simpanan_edit($id) {
        $this->db->where('id_simpanan', $id);
        $data = $this->db->get('simpanan');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    //belum fixx
    function simpanan_update($simpanan) {
        $this->db->where('id_simpanan', $simpanan['id_simpanan']);
        $this->db->update('simpanan', $simpanan);
    }

    function simpanan_hapus($id) {
        $this->db->where('id_simpanan', $id);
        $this->db->delete('simpanan');
    }

    function get_status_perkawinan() {
        $get = $this->db->get('status_perkawinan');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function get_pendidikan() {
        $get = $this->db->get('pendidikan');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function cari_simpanan() {
        $c = $this->input->post('cari');
        $this->db->like('nia', $c);
        $query = $this->db->get('vpinjaman');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function pinjaman_tambah($data) {
        $this->db->insert('pinjaman', $data);
    }

    function cari_pinjaman() {
        $c = $this->input->post('cari');
        $this->db->like('nia', $c);
        $query = $this->db->get('anggota');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function pinjaman_hapus($id) {
        $this->db->where('id_pinjaman', $id);
        $this->db->delete('pinjaman');
    }

    function cari_nia() {
        $c = $this->input->post('cari');
        $this->db->like('nama', $c);
        $query = $this->db->get('anggota');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_pinjaman() {
        $get = $this->db->get('vpinjaman');
        if ($get->num_rows > 0) {
            return $get->result();
        }
    }

    function getJenisSimpanan($id) {
        $this->db->where('id_jenis_simpanan', $id);
        $data = $this->db->get('jenis_simpanan');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function simpananWajibSave($post) {
        $this->db->insert('simpanan', $post);
    }

    function get_angsuran() {
        $data = $this->db->get('vangsuran');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function cari_angsuran() {
        $c = $this->input->post('cari');
        $this->db->like('nia', $c);
        $query = $this->db->get('anggota');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function angsuran_tambah($data) {
        $this->db->insert('angsuran', $data);
    }

    function angsuran_edit($id) {
        $this->db->where('id_angsuran', $id);
        $data = $this->db->get('vangsuran');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function angsuran_update($angsuran) {
        $this->db->where('id_angsuran', $angsuran['id_angsuran']);
        $this->db->update('angsuran', $angsuran);
    }

    function getSimpananWajib($id, $thn, $nia) {
        $this->db->where('id_jenis_simpanan', $id);
        $this->db->where('nia', $nia);
        $this->db->where('tahun', $thn);
        $this->db->order_by('bulan');
        $this->db->order_by('tahun');
        $data = $this->db->get('simpanan');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function cekWajib($nia, $bln, $thn) {
        $this->db->where('bulan', $bln);
        $this->db->where('tahun', $thn);
        $this->db->where('nia', $nia);
        $data = $this->db->get('simpanan');
        return $data->num_rows();
    }

    function cekPokok($nia, $jenis, $tahun) {
        $this->db->where('nia', $nia);
        $this->db->where('id_jenis_simpanan', $jenis);
        $this->db->where('tahun', $tahun);
        $data = $this->db->get('simpanan');
        return $data->num_rows();
    }

    function getAngsuran($id) {
        $this->db->where('id_pinjaman', $id);
        $data = $this->db->get('vpinjaman');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function getPinjaman($id) {
        $this->db->where('id_pinjaman', $id);
        $data = $this->db->get('vpinjaman');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function updateSisa($id, $set) {
        $this->db->where('id_pinjaman', $id);
        $this->db->update('pinjaman', $set);
    }

    function cekPinjaman($nia) {
        $this->db->where('nia', $nia);
        $data = $this->db->get('vpinjaman');
        if ($data->num_rows > 0) {
            return $data->result();
        }
    }

    function getUser($c) {
        $this->db->where('nia', $c);
        $data = $this->db->get('vpinjaman');
        if ($data->num_rows > 0) {
            return $data->num_rows();
        }
    }

}
?>  
