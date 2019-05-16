<?php 
include "koneksi.php";
//menangkap data yang dikirim dari form tambah data barang
$No = htmlspecialchars($_POST['No']);
$Nama = htmlspecialchars($_POST['Nama']);
$Status = htmlspecialchars($_POST['Status']);
$Tanggal = htmlspecialchars($_POST['Tanggal']);
$Dari = htmlspecialchars($_POST['Dari']);
$Jumlah = htmlspecialchars($_POST['Jumlah']);
$Harga = htmlspecialchars($_POST['Harga']);
$Total = htmlspecialchars($_POST['Total']);


$sql = "INSERT INTO barang VALUES ('".$No."', '".$Nama."', '".$Status."', '".$Tanggal."', '".$Dari."', '".$Jumlah."', '".$Harga."', '".$Total."')";
mysqli_query($koneksi,$sql);

//mengalihkan kehalaman awal data barang masuk
header("location: Barang_Masuk.php");
 ?>