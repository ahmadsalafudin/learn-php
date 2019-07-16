<?php
// Sisipkan Class FPDF dan File Koneksi
require('../assets/filepdf/fpdf.php');
include "../koneksi.php";


class PDF extends FPDF{
// Load data = Pecah Array

	 function LoadData($gue){
	  $data = array();
	  if (is_array($gue)) {
	  foreach($gue as $coba)
	   $data[] = explode('|',$coba);
	  }
	  return $data;
	 }
	 function Header()
	 {
	 	// Logo
	 	//$this->Image('payroll2.png',10,6,30);
	 	// Arial bold 15
	 	$this->SetFont('times','B',16);
	 	$this->Cell(0,10,'PT. MAKMUR JAYA',0,1,'L');
	 	$this->SetFont('times','',12);
	 	$this->Cell(0,2,'DATA BAGIAN' ,0,1,'L');
	 	$this->Cell(0,10,'Tanggal Cetak :'. date(' d M Y'),0,1,'R');
	 	// Line break
	 	$this->Ln(10);
	 	//buat garis horisontal
	 	$this->Line(0,30,270,30);
	 	$this->Line(0,31,270,31);
	 }
	 
	 function Footer()
	 {
	 	// Position at 1.5 cm from bottom
	 	$this->SetY(-10);
	 	// Arial italic 8
	 	$this->SetFont('times','I',10);
	 	//buat garis horizontal
	 	$this->Line(0,$this->GetY(),270,$this->GetY());
	 	// Page number
	 	$this->Cell(0,10,'**Dokumen Rahasia Milik PT. MAKMUR JAYA',0,0,'R');
	 }
	 // Fungsi Membuat Tabel
	 function FancyTable($header, $data){

	  // Colors, line width and bold font
	  $this->SetFillColor(0,0,0);
	  $this->SetTextColor(255);
	  $this->SetDrawColor(0,0,0);
	  $this->SetLineWidth(.2);
	  $this->SetFont('','B');
	  
	  // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
	  $w = array(10, 65, 45, 40, 30);
	  for($i=0;$i<count($header);$i++)
	   $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	  $this->Ln();
	  
	  // Color and font restoration
	  $this->SetFillColor(224,235,255);
	  $this->SetTextColor(0);
	  $this->SetFont('');

	  // Data
	  $fill = false;
	  foreach($data as $row){
	   // Field Dari Database Yang Ingin ditampilkan
	   // $this->Cell($w[Ubah Ini],6,$row[Ubah Ini],'LR',0,'L',$fill);
	   $this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
	   $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
	   $this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
	   $this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
	   $this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
	   $this->Ln();
	   $fill = !$fill;
	  }
	  
	  // Closing line
	  $this->Cell(array_sum($w),0,'','T');
	 }
	 }

	 $pdf = new PDF();
	 // Pendefinisian Header Tabel
$header = array('No.', 'Nama Bagian','Gaji Pokok', 'Uang Transport', 'Uang Makan');

// Load Data dari Database
$dataku = mysql_query("SELECT * FROM bagian");
$no = 0;
	while ($tampil=mysql_fetch_array($dataku)){
	$no++;
	// Simpan Kedalam Array dengan Batasan |
	@$gue[] .= $no."|".$tampil['nm_bagian']."|".$tampil['gaji_pokok']."|".$tampil['uang_transport']."|".$tampil['uang_makan'];
	 }
	 // Cetak Laporan
	 $data = $pdf->LoadData($gue);
	 $pdf->SetFont('times','',12);
	 $pdf->AddPage();
	 $pdf->FancyTable($header,$data);
	 $pdf->Output();
	?>