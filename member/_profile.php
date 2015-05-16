<?php
session_start();
include "../connect.php";
$userid		= $_SESSION['userid'];
$select		= "SELECT * FROM pengguna WHERE UserID='$userid'";
$query		= mysqli_query($con, $select);
$fetch		= mysqli_fetch_array($query);
?>

<html>
<table>
<tr><td>Username</td>
    <td>: <?php echo $userid; ?></td>
</tr>
<tr><td>No. HP</td>
    <td>: <?php echo $fetch['Phone']; ?></td>
</tr>
<tr><td><a href="change-pass.php">Ganti password</a></td></tr>
</table>
</html>