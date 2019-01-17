<?php
	include 'config.php';
	
	//mengaktifkan session
	session_start();
	
	//cek apakah user telat login,
	if($_SESSION['status'] !="login") {
		header("location:index.php");
	}
	
	//menampilkan pesan selamat datang
	echo "Welcome". $_SESSION['username'];
		header("location:tampil.php");
?>
<br/>
<br/>
<a href="Logout.php">LOGOUT</a>