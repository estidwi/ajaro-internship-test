<html>
	<head>
		<title>KELOLA DATA BARANG</title>
		<link rel="stylesheet" href="Css.css" type="text/css">
	</head>
	<body>
	<h2> KELOLA DATA BARANG </h2>
	
	<?php 
	include("connect.php");
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM barang where id='$id'") or die(mysql_error());
	//$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	
		<form action="update.php" method="post" p align="center">
		<table width=50% height=5% p align="center">
			<tr>
				<td><b> Input data Barang </b></td>
			</tr>
			</table>
			<br>
		<table width=50% height=5% p align="center">
		<tr>
			<td> Kode : </td>
			<td><input type="text" name="kode" readonly value="<?php echo$data['kode'] ?>" class="hd"></td>
		</tr>
		<tr>
			<td>Nama : </td>
			<td><input type="text" name="nama" value="<?php echo$data ['nama'] ?>" class="hd"></td>
		</tr>
		<tr>
			<td>Deskripsi : </td>
			<td><textarea name="deskripsi" class="hd"><?php echo$data ['deskripsi'] ?></textarea></td>
		</tr>
		<tr>
			<td>Stok </td>
			<td><input type="text" name="stock" value="<?php echo$data ['stock'] ?>" class="hd"></td>
		</tr>
		<tr>
			<td>Harga : </td>
			<td><input type="text" name="harga" value="<?php echo$data ['harga'] ?>" class="hd"></td>
		</tr>
		<tr>
			<td>Berat : </td>
			<td><input type="text" name="berat" value="<?php echo$data ['berat'] ?>" class="hd"> gram </td>
		</tr>
		</table>
		<table>
			<p align="center"><input class="btn" type=submit value="update"></p>
		</table>
	</body>
	<?php
		}
	?>
</html>