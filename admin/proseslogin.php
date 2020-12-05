<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require '../koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password' ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['username']=="samsat"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['username'] = "samsat";
		// alihkan ke halaman dashboard admin
		header("location:home.php");


	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

// if ( mysqli_num_rows($login) === 1 ) {
// 	// cek password
// 	$row = mysqli_fetch_assoc($login);
// 	if (password_verify($password, $row["password"]) ) {
		
// 		//cek session
// 		$_SESSION["login"] = true;

// 		header("location: home.php");
// 		exit;
// 	}
// }

?>