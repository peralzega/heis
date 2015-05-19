<?php
include "connect.php";
$username	= $_POST['username'];
$password	= $_POST['password'];

$select			= "SELECT * FROM pengguna WHERE UserID='$username'";
$query			= mysqli_query($con, $select);
$rows			= mysqli_num_rows($query);
$fetch			= mysqli_fetch_array($query);

if ($rows > 0) {
	if ($password == $_fetch['Pass']) {
		session_start();
		$_SESSION['userid'] = $data['UserID'];
		$_SESSION['userpass'] = $data['Pass'];
		
		if ($data['Role'] == "Member") {
			header("Location:/heis/member/home-default.php");
		} else {
			header("Location:success.php");
		}
	} else {
		header("Location:login-error.php");
	}
} else {
	header("Location:login-error2.php");
}
?>