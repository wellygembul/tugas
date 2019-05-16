<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$UserName = $_GET['UserName'];
$Password = $_GET['Password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM multi WHERE UserName='$UserName' and Password='$Password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$d = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($d['Level']=="Admin"){

		// buat session login dan username
		$_SESSION['UserName'] = $UserName;
		$_SESSION['Level'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location: ../admin/home.php");

	// cek jika user login sebagai Member
	}else if($d['Level']=="Member"){
		// buat session login dan UserName
		$_SESSION['UserName'] = $UserName;
		$_SESSION['Level'] = "Member";
		// alihkan ke halaman dashboard Member
		header("location: Shop/User.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:../Loginjadi/login.php?pesan=gagal");
	}	
}
?>