 <?php 
include "koneksi.php";
//menangkap data yang dikirim dari form tambah data barang
$No = htmlspecialchars($_POST['No']);
$Nama = htmlspecialchars($_POST['Nama']);
$Foto = $_FILES['Foto']['name'];
$folder = './file/';
$sumber = $_FILES['Foto']['tmp_name'];
$Tempat = htmlspecialchars($_POST['Tempat']);
$Tanggal = htmlspecialchars($_POST['Tanggal']);
$Jenis = htmlspecialchars($_POST['Jenis']);
$Pendidikan = htmlspecialchars($_POST['Pendidikan']);
$Telp = htmlspecialchars($_POST['Telp']);
$Email = htmlspecialchars($_POST['Email']);
$Jabatan = htmlspecialchars($_POST['Jabatan']);
$Status = htmlspecialchars($_POST['Status']);
move_uploaded_file($sumber, "Foto/".$Foto);

$sql = "INSERT INTO pegawai VALUES ('".$No."', '".$Nama."', '".$Foto."', '".$Tempat."', '".$Tanggal."', '".$Jenis."', '".$Pendidikan."', '".$Telp."', '".$Email."', '".$Jabatan."', '".$Status."')";
mysqli_query($koneksi,$sql);

//mengalihkan kehalaman awal data barang masuk
header("location: DataP.php");
 ?>