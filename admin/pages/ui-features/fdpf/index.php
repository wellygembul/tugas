<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'PT HAPPY SHOP JAYA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DATA LAPORAN PENJUALAN',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Kode Barang',1,0);
$pdf->Cell(85,6,'Nama Barang',1,0);
$pdf->Cell(25,6,'Tanggal Masuk Barang',1,1);
$pdf->Cell(27,6,'Jumlah',1,0);


$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM penjualan");
while ($d = mysqli_fetch_array($sql)){
    $pdf->Cell(20,6,$d['No'],1,0);
    $pdf->Cell(85,6,$d['Nama'],1,0);
    $pdf->Cell(25,6,$d['Tanggal'],1,1);
    $pdf->Cell(27,6,$d['Jumlah'],1,0);
     
}

$pdf->Output();
?>
