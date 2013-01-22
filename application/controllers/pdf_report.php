<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pdf_report extends Controller {
     
    public function index()
    {
        // Load library FPDF
        $this->load->library('fpdf');
         
        // Load Database
        $this->load->database();
         
        /* buat konstanta dengan nama FPDF_FONTPATH, kemudian kita isi value-nya
           dengan alamat penyimpanan FONTS yang sudah kita definisikan sebelumnya.
           perhatikan baris $config['fonts_path']= 'system/fonts/';
           didalam file application/config/config.php
        */           
        define('FPDF_FONTPATH',$this->config->item('fonts_path'));
         
        // Load model "karyawan_model"
        $this->load->model('kopma');
         
        /* Kita akses function get_all didalam karyawan_model
           function get_all merupakan fungsi yang dibuat untuk mengambil
           seluruh data karyawan didalam database.
        */
        $data['karyawan'] = $this->kopma->get_anggota();
         
        // Load view "pdf_report" untuk menampilkan hasilnya       
        $this->load->view('pdf_report', $data);
    }
}
?>