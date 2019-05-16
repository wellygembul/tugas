 <?php 
include "koneksi.php";
//menangkap data yang dikirim dari form tambah data barang
$No = htmlspecialchars($_POST['No']);
$Nama = htmlspecialchars($_POST['Nama']);
$Tanggal = htmlspecialchars($_POST['Tanggal']);
$Jumlah = htmlspecialchars($_POST['Jumlah']);


$sql = "INSERT INTO penjualan VALUES ('".$No."', '".$Nama."', '".$Tanggal."', '".$Jumlah."')";
mysqli_query($koneksi,$sql);

//mengalihkan kehalaman awal data barang masuk
header("location: Data_Penjualan.php");
 ?>