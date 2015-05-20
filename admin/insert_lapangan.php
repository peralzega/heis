<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form

$nama = $_POST['nama_lapangan'];
$harga = $_POST['harga'];


 
//simpan data ke database
$query = mysql_query("insert into lapangan values('','$nama', '$harga')") ;

	
	
	
if($query )
	{
	header('location:view_lapangan.php');
	}
else {header('location:insert_lapangan.php?error=error');}
?>
 
