<?php
 
/* setting zona waktu */
date_default_timezone_set('Asia/Jakarta');
 
/* konstruktor halaman pdf sbb :    
   P  = Orientasinya "Potrait"
   cm = ukuran halaman dalam satuan centimeter
   A4 = Format Halaman
    
   jika ingin mensetting sendiri format halamannya, gunakan array(width, height)  
   contoh : $this->fpdf->FPDF("P","cm", array(20, 20));  
*/
 
$this->fpdf->FPDF("P","cm","A4");
 
// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(1,1,1);
 
 
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
   di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
$this->fpdf->AliasNbPages();
 
// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();
 
// Setting Font : String Family, String Style, Font size 
$this->fpdf->SetFont('Times','B',10);
 
/* Kita akan membuat header dari halaman pdf yang kita buat 
   -------------- Header Halaman dimulai dari baris ini -----------------------------
*/
$this->fpdf->Cell(19,0.7,'LAPORAN ANGSURAN',0,0,'C');
 
// fungsi Ln untuk membuat baris baru
$this->fpdf->Ln();
$this->fpdf->Cell(19,0.7,'KOPERASI KOPMA UGM',0,0,'C');
 
$this->fpdf->Ln();
/* Setting ulang Font : String Family, String Style, Font size
   kenapa disetting ulang ???
   jika tidak disetting ulang, ukuran font akan mengikuti settingan sebelumnya.
   tetapi karena kita menginginkan settingan untuk penulisan alamatnya berbeda,
   maka kita harus mensetting ulang Font nya.
   jika diatas settingannya : helvetica, 'B', '12'
   khusus untuk penulisan alamat, kita setting : helvetica, '', 10
   yang artinya string stylenya normal / tidak Bold dan ukurannya 10 
*/
$this->fpdf->SetFont('helvetica','',10);
$this->fpdf->Cell(19,0.5,'Bulaksumur H-7 & H-8 Depok Sleman Yogyakarta 55281',0,0,'C');
 
$this->fpdf->Ln();
$this->fpdf->Cell(19,0.5,'Telp. (0274)565774, 519943; Fax. (0274) 566171',0,0,'C');
 
/* Fungsi Line untuk membuat garis */
$this->fpdf->Line(1,3.5,20,3.5);
$this->fpdf->Line(1,3.55,20,3.55);
 
/* -------------- Header Halaman selesai ------------------------------------------------*/
 
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(19,1,'LAPORAN DATA ANGSURAN',0,0,'C');
 
 
/* setting header table */
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(1  , 1, 'ID '           , 1, 'LR', 'C');
$this->fpdf->Cell(2 , 1, 'Nia' , 1, 'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Nama' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 1, 'Pokok' , 1, 'LR', 'C');
$this->fpdf->Cell(3 , 1, 'Mengansur' , 1, 'LR', 'C');
$this->fpdf->Cell(5 , 1, 'tanggal' , 1, 'LR', 'C');

 
/* generate hasil query disini */
foreach($angsuran as $ans)
{
    $this->fpdf->Ln();
    $this->fpdf->SetFont('Times','',12);
    $this->fpdf->Cell(1  , 0.7, $ans->id_angsuran  , 1, 'LR', 'C');
    $this->fpdf->Cell(2 , 0.7, $ans->nia , 1, 'LR', 'C');
    $this->fpdf->Cell(5 , 0.7, $ans->nama , 1, 'LR', 'C');
    $this->fpdf->Cell(3 , 0.7, $ans->pokok , 1, 'LR', 'C');
    $this->fpdf->Cell(3 , 0.7, $ans->mengansur , 1, 'LR', 'C');
    $this->fpdf->Cell(5 , 0.7, $ans->tanggal , 1, 'LR', 'C');
}
/* setting posisi footer 3 cm dari bawah */
$this->fpdf->SetY(-3);
 
/* setting font untuk footer */
$this->fpdf->SetFont('Times','',10);
 
/* setting cell untuk waktu pencetakan */
$this->fpdf->Cell(9.5, 0.5, 'Printed on : '.date('d/m/Y H:i').' | Created by : Admin',0,'LR','L');
 
/* setting cell untuk page number */
$this->fpdf->Cell(9.5, 0.5, 'Page '.$this->fpdf->PageNo().'/{nb}',0,0,'R');
 
/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
$this->fpdf->Output("Laporan_pinjaman.pdf","I");
?>