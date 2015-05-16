<?php
include "../connect.php";
session_start();
session_destroy();

echo "Andah telah berhasil Logout. Terimakasih atas transaksi Anda.";
?>