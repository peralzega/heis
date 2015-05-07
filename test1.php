<?php
include "connect.php";

$i=13;
$select = "SELECT * FROM transaksi WHERE PlayStart=13 AND PlayDate='2015-05-05'";
$query  = mysqli_query($con, $select); 
$fetch  = mysqli_fetch_array($query);
$j		= $fetch['PlayEnd']; 

$range = $j - $i;
echo $j." - ".$i." = ".$range;
?>