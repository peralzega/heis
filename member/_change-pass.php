<?php
session_start();
include "../connect.php";
$userid		= $_SESSION['userid'];
$pass		= $_SESSION['userpass'];
?>
<html>
	<label>Password lama</label>
	<input type="password" name="oldpass" /><br/>
	<label>Password baru</label>
	<input type="password" name="newpass1" /><br/>
	<label>Ketik ulang password baru</label>
	<input type="password" name="newpass2" /><br/>
	<a href="check-pass.php?old=oldpass&new1=newpass1&new2=newpass2">
		<button>Ok</button>
	</a>
	<a href="profile.php">
		<button>Batal</button>
	</a>
</html>
