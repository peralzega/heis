<?php
include "connect.php";
$userid		= $_POST['userid'];
$hp			= $_POST['hp'];
$pass1		= $_POST['pass1'];
$pass2		= $_POST['pass2'];
$select		= "SELECT * FROM pengguna WHERE UserID='$userid'";
$query		= mysqli_query($con, $select);
$row		= mysqli_num_rows($query);

if ($row > 0) {
	header("Location: register-error.php");
} else if ($pass1 !== $pass2) {
	header("Location: register-error2.php");
} else {
	$insert	= "INSERT INTO pengguna(UserID,
		                                Phone,
										Pass,
										Role)
		                         VALUES('$userid',
								        '$hp',
										'$pass1',
										'Member')";
	$query	= mysqli_query($con, $insert);
		
	if ($query == TRUE) {
		session_start();
		$_SESSION['userid'] = $userid;
		$_SESSION['userpass'] = $pass1;
		header("Location:/heis/member/home-default.php");
	} else {
	}
}
?>