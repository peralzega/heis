<?php
session_start();
include "../connect.php";
$i		= $_POST['jam'];
$durasi	= $_POST['durasi'];
$date	= $_POST['date'];
$field	= $_POST['field'];
$total	= $i+$durasi;
$select = "SELECT * FROM transaksi WHERE PlayDate='$date' AND Field='$field'";
$query	= mysqli_query($con,$select);
$fetch	= mysqli_fetch_array($query);
while ($fetch['PlayStart'] > $total) {
	header("Location : pay");

?>