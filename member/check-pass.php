<?php
session_start();
include "../connect.php";
$userid		= $_SESSION['userid'];
$old		= $_GET['old'];
$new1		= $_GET['new1'];
$new2		= $_GET['new2'];
$select		= "SELECT * FROM pengguna WHERE UserID='$userid'";
$query		= mysqli_query($con, $select);
$fetch		= mysqli_fetch_array($query);

if (empty($old) || empty($new1) || empty($new1)) {
	echo "Form ada yang kosong. Silahkan ulangi.";
} else {
if ($old !== $fetch['Pass']) {
	echo "Password lama salah. Silahkan ulangi.";
} else if ($new1 !== $new2) {
	echo "Password baru tidak cocok. Silahkan ulangi.";
} else {
	$update	= "UPDATE pengguna SET Pass='$new1' WHERE UserID='$userid'";
	$query	= mysqli_query($con, $update);
	if ($query == TRUE) {
		header("Location:home-default.php");
	} else {
	}
}
}
?>