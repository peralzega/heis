<?php
// include('cek-login.php');
?>

<?php
include('config.php');
 
$id = $_GET['id'];
 
$query = mysql_query("delete from lapangan where FieldId='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view_lapangan.php?message=delete');
}
?>