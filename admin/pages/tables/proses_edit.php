 <?php 
include "koneksi.php";
//menangkap data yang dikirim dari form tambah data barang
$No = htmlspecialchars($_GET['No']);
$Nama = htmlspecialchars($_POST['Nama']);
$Foto = $_FILES['Foto']['name'];
$folder = './file/';
$sumber = $_FILES['Foto']['tmp_name'];
$Tempat = htmlspecialchars($_POST['Tempat']);
$Tanggal = htmlspecialchars($_POST['Tanggal']);
$Status = htmlspecialchars($_POST['Status']);
$Pendidikan = htmlspecialchars($_POST['Pendidikan']);
$Jabatan = htmlspecialchars($_POST['Jabatan']);
$Telp = htmlspecialchars($_POST['Telp']);
$Email = htmlspecialchars($_POST['Email']);
move_uploaded_file($sumber, "Foto/".$Foto);


$query ="UPDATE pegawai SET Nama='".$Nama."', Foto='".$Foto."', Tempat='".$Tempat."', Tanggal='".$Tanggal."', Status='".$Status."', Pendidikan='".$Pendidikan."', Jabatan='".$Jabatan."', Telp='".$Telp."', Email='".$Email."' WHERE No='".$No."' ";
$sql = mysqli_query($koneksi, $query);
//mengalihkan kehalaman awal data barang masuk
header("location: DataP.php");
 ?>
