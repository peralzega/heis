<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form

$username = $_POST['userid'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$level = "Member";



 
//simpan data ke database

$query2 = mysql_query("insert into pengguna values('$username','$no_hp','$password','$level')");

	
	
	
if($query2)
	{
		header('location:login.php?message=successlogin');
	}
else {header('location:sign_up.php?error=username has been used ...');}
?>
 
