<?php
	include("connect.php");
	$kode			= $_POST["kode"];
	$nama			= $_POST["nama"];
	$deskripsi		= $_POST["deskripsi"];
	$stock			= $_POST["stock"];
	$harga			= $_POST["harga"];
	$berat			= $_POST["berat"];
	
	$ubah=("update barang set kode='$kode', nama='$nama', deskripsi='$deskripsi', stock='$stock', harga='$harga', berat='$berat' where kode='$kode'");
	$hasil=mysql_query($ubah,$conn);
	header("location:tampil.php");
?> 