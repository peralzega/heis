<?php
include "connect.php";
$select = "SELECT * FROM transaksi WHERE PlayStart>13 AND PlayDate='2015-05-25' AND Field='Semen'";
$query	= mysqli_query($con,$select);
$fetch	= mysqli_fetch_array($query);
echo $fetch['PlayStart'];
?>