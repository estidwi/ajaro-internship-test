<html>
	<head>
		<title>Home Data Barang</title>
		<link rel="stylesheet" href="Css.css" type="text/css">
	</head>
	
	<body>
		<h3><div class = "Jdl">KELOLA DATA BARANG</div></h3>	
		 <table width= 80% height= 5% align="center">
			<tr>
			   <td><b>Data Barang</b></td>
			   <td><p align="right"><a href = "Input.php"><Button class ="btn">Tambah</Button></a>
			</tr>
		</table>
		<br>
		
		<table width= 80%  align= "center" border = 1 cellpadding= 0 cellspacing= 0>
			<tr align= "center">
				<td >Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Aksi</td>
			</tr>
					<?php
						//koneksi ke database
					include("connect.php");
					//mengambil data dari tabel barang
					$tampil = mysql_query("SELECT * FROM barang");
					while ($data = mysql_fetch_array($tampil)){
					?>
					<tr p align="center">
						<td><?php echo $data['kode']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['harga']; ?></td>
						<td class = "eh"><a href="edit.php?id=<?php echo $data['id'];?>">
						Edit</a> | <a href = "hapus.php?id=<?php echo $data['id'];?>"> Hapus </a></td>
					</tr>
  
					<?php
						}
					?>
					<?php 
					session_start();
					if(!isset($_SESSION['username'])) {
					header('location:Login.php');}
					else { $username = $_SESSION['username']; }
					require_once("config.php");
					$mysql_query= "select * from user where username = $'username'";
					//$query = mysql_query("select * from user where username = $'username'");
					//$hasil = mysql_fetch_array($query);
					?>
					
					<table align="center">
					<br>
					<br>
					<td align="center"><a href="Logout.php"><Button class="btn">LOGOUT</a></Button>
					</br>
					</tr>
					</td>
					</table>
					</table>
					</body>
					</html>
					
					
	  
      </table>
   </body>
</html>