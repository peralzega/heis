<?php
include 'change-month.php';
function getym($date) {
	$month = substr($date,5,2);
	$year = substr($date,0,-6);
	echo changemonth($month).$year;
}
?>