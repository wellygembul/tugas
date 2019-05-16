<?php
include "koneksi.php";
$id_pegawai = $_GET['id_pegawai'];

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$status_menikah = $_POST['status_menikah'];
$jumlah_anak = $_POST['jumlah_anak'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$id_jabatan = $_POST['id_jabatan'];
$gaji_pokok = $_POST['gaji_pokok'];
$pendidikan = $_POST['pendidikan'];
$status_karyawan = $_POST['status_karyawan'];

if(isset($_POST['ubah_foto'])){ 
  
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
  $fotobaru = date('dmYHis').$foto;
  
  $path = "images/".$fotobaru;

  if(move_uploaded_file($tmp, $path)){ 
    
    $query = "SELECT * FROM pegawai WHERE id_pegawai='".$id_pegawai."'";
    $sql = mysqli_query($connect, $query); 
    $data = mysqli_fetch_array($sql); 
    
    if(is_file("images/".$data['foto'])) 
      unlink("images/".$data['foto']);
      
    $query = "UPDATE pegawai SET nip='".$nip."', nama='".$nama."', tempat_lahir='".$tempat_lahir."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', telepon='".$telepon."', status_menikah='".$status_menikah."', jumlah_anak='".$jumlah_anak."', tanggal_masuk='".$tanggal_masuk."', id_jabatan='".$id_jabatan."', gaji_pokok='".$gaji_pokok."', pendidikan='".$pendidikan."', status_karyawan='".$status_karyawan."', username='".$username."',password='".$password."', foto='".$fotobaru."' WHERE id_pegawai='".$id_pegawai."' ";
    $sql = mysqli_query($connect, $query); 
    if($sql){
      header("location: layout.php"); 
    }else{
     
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
    }
  }else{
    
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
  }
}else{ 

  $query = "UPDATE pegawai SET nip='".$nip."', nama='".$nama."', tempat_lahir='".$tempat_lahir."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', telepon='".$telepon."', status_menikah='".$status_menikah."', jumlah_anak='".$jumlah_anak."', tanggal_masuk='".$tanggal_masuk."', id_jabatan='".$id_jabatan."', gaji_pokok='".$gaji_pokok."', pendidikan='".$pendidikan."', status_karyawan='".$status_karyawan."', username='".$username."',password='".$password."', foto='".$fotobaru."' WHERE id_pegawai='".$id_pegawai."' ";
  $sql = mysqli_query($connect, $query); 
  if($sql){

    header("location: layout.php");
  }else{
    
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
  }
}
?>