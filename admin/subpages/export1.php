<?php
require "../../koneksi.php";

date_default_timezone_set('Asia/Jakarta');
require('pdf/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A5');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'DATA RELAWAN COVID 19 DKI JAKARTA',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Tanggal :'.date("d-M-Y H:i:s"),0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,'ID',1,0);
$pdf->Cell(28,6,'Nama Lengkap',1,0);
$pdf->Cell(40,6,'Alamat',1,0);
$pdf->Cell(20,6,'Provinsi',1,0);
$pdf->Cell(38,6,'Email',1,0);
$pdf->Cell(25,6,'No HP',1,0);
$pdf->Cell(25,6,'Keahlian',1,1);
 
$pdf->SetFont('Arial','',7);
$query = mysqli_query($connection, "SELECT * FROM laporan");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(8,6,$row['id_laporan'],1,0);
    $pdf->Cell(28,6,$row['nama_lengkap'],1,0);
    $pdf->Cell(40,6,$row['alamat'],1,0);
    $pdf->Cell(20,6,$row['provinsi'],1,0);
    $pdf->Cell(38,6,$row['email'],1,0);
    $pdf->Cell(25,6,$row['no_hp'],1,0);
    $pdf->Cell(25,6,$row['keahlian'],1,1);
}

$pdf->Output();
?>
