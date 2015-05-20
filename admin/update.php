<?php
include('config.php');
 
//tangkap data dari form
$id = $_POST['FieldID'];
$nama_lapangan = $_POST['nama_lapangan'];
$harga = $_POST['harga'];

 
//update data di database sesuai user_id
$query = mysql_query("update lapangan set FieldName='$nama_lapangan', Price='$harga' where FieldID='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view_lapangan.php?message=success');
}
?>