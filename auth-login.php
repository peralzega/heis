<?php
include "connect.php";
$username	= $_POST['username'];
$password	= $_POST['password'];

$query		= "SELECT * FROM pengguna WHERE UserID='$username' AND Pass='$password'";
$login		= mysqli_query($con, $query);
$found		= mysqli_num_rows($login);
$data		= mysqli_fetch_array($login);

if ($found > 0) {
	session_start();
	$_SESSION['userid'] = $data['UserID'];
	$_SESSION['userpass'] = $data['Pass'];
	if ($data['Role'] == "Member") {
		header("Location:\heis\member\home-default.php");
	} else {
		header("Location:success.php");
	}
} else {
	header("Location:index.php");
}


?>