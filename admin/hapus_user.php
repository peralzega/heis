<?php
// include('cek-login.php');
?>

<?php
include('config.php');
 
$id = $_GET['id'];
 
$query = mysql_query("delete from pengguna where UserId='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view_user.php?message=delete');
}
?>