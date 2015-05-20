<?php
include "connect.php";
$userid		= $_POST['userid'];
$hp			= $_POST['hp'];
$pass1		= $_POST['pass1'];
$pass2		= $_POST['pass2'];

if (empty($userid) || empty($hp) || empty($pass1) || empty($pass2)) {
	echo "Form ada yang kosong. Silahkan ulangi.";
} else {
	$select		= "SELECT * FROM pengguna WHERE UserID='$userid'";
	$query		= mysqli_query($con, $select);
	$row		= mysqli_num_rows($query);
	if ($row > 0) {
		echo "Username tidak tersedia. Silahkan ulangi.";
	} else if ($pass1 !== $pass2) {
		echo "Password salah. Silahkan ulangi.";
	} else {
		$insert	= "INSERT INTO pengguna(UserID,
		                                Phone,
										Pass,
										Role)
		                         VALUES('$userid',
								        '$hp',
										'$pass1',
										'Admin')";
		$query	= mysqli_query($con, $insert);
		
		if ($query == TRUE) {
			session_start();
			$_SESSION['userid'] = $userid;
			$_SESSION['userpass'] = $pass1;
			header("Location:/heis/HomeAdmin.php");
		} else {
		}
	}
}
?>