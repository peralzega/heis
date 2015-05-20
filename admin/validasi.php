<?php
include('config.php');
 
 session_start();
 


//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
    //kalau username dan password kosong
    header('location:index.php?error=1&&id_produk='.$id.'&&#!/LOGIN');
    break;
} else if (empty($username)) {
    //kalau username saja yang kosong
    header('location:index.php?error=2&&id_produk='.$id.'&&#!/LOGIN');
    break;
} else if (empty($password)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:index.php?error=3&&id_produk='.$id.'&&#!/LOGIN');
    break;
}
 
$q = mysql_query("select * from pengguna where UserID='$username' and Pass='$password'");
$data = mysql_fetch_array($q);
$level = $data['Role'];
echo $level;
if (mysql_num_rows($q) == 1) 
{

	 if($level == "member")
	 {
	
    //kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $data['Role'];
	//redirect ke halaman index
    header('location:index.php?username='.$_SESSION['username'].'');
	}
	 else if($level == "Admin")
	{
	 $_SESSION['username'] = $username;
	 $_SESSION['level'] = $data['Role'];
	 header('location:beranda.php');
	} 
	 else if($level == "Super Admin")
	 {
	 {$_SESSION['username'] = $username;
	 $_SESSION['level'] = $data['Role'];
	 header('location:superadmin.php');}
	} 
	
	else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=4&&id_produk='.$id.'&&#!/LOGIN');
}}
?>