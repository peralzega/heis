<?php
session_start();
include "../connect.php";
$i		= $_POST['jam'];
$durasi	= $_POST['durasi'];
$date	= $_POST['date'];
$field	= $_POST['field'];
$total	= $i+$durasi;
$select = "SELECT * FROM transaksi WHERE PlayStart>$i AND PlayStart<$total AND PlayDate='$date' AND Field='$field'";
$query	= mysqli_query($con,$select);
$rows	= mysqli_num_rows($query);
if ($rows > 0) {
	echo "Kurangi durasi permainan";
} else {
	echo "MANTAP";
}
?>