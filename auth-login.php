<?php
include "connect.php";
$username	= $_POST['username'];
$password	= $_POST['password'];

$select			= "SELECT * FROM pengguna WHERE UserID='$username'";
$query			= mysqli_query($con, $select);
$rows			= mysqli_num_rows($query);
$fetch			= mysqli_fetch_array($query);

if ($rows > 0) {
	if ($password == $fetch['Pass']) {
		session_start();
		$_SESSION['userid'] = $fetch['UserID'];
		$_SESSION['userpass'] = $fetch['Pass'];
		
		if ($fetch['Role'] == "Member") {
			header("Location:/heis/member/home-default.php");
		} else if ($fetch['Role'] == "Admin") {
			header("Location:/heis/admin/home.php");
		} else {
			header("Location:/heis/superadmin/home.php");
		}
	} else {
		header("Location:login-error.php");
	}
} else {
	header("Location:login-error2.php");
}
?>