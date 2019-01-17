<?php
include("connectt.php"); 

$E-mail Address	=$_POST["E-mail Address"];
$password		=$_POST["password"];

if (trim($Email-Address)==""){
		echo "Email-Address masih kosong, isi dengan benar";
	}
	elseif (trim($password)==""){
		echo "password masih kosong, isi dengan benar";
	}
else{
$input="insert into tb_login(E-mail Address,password,)
values ('$E-mail Address','$password')";
$hasil = mysql_query($index,$conn);
header("location:index.php");
	}
?>