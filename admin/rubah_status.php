<?php
include('config.php');
 
//tangkap data dari form
$id = $_GET['id'];
$status = 1;
 
//update data di database sesuai user_id
$query = mysql_query("update transaksi set Stats='$status' where User_ID ='$id'") or die(mysql_error());
 
if ($query) {
    header('location:home.php?message=success');
}
?>