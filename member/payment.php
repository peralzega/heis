<?php
$playdt = $_GET['playdt'];
$play0	= $_GET['play0'];
$play1	= $_GET['play1'];
$durasi = $_GET['durasi'];
$field  = $_GET['field'];
$harga	= $_GET['harga'];
$time	= date('G:i');
?>

<h2>Pembayaran</h2>
<p>Transaksi Anda telah selesai. Silahkan lakukan
pembayaran ke no.rekening 123456 (BCA) sebesar <?php echo $harga;?>.
Lalu lakukan konfirmasi pembayaran ke nomor 0812 3456 7890
dengan format SMS: Username_Tanggal Main_Jam Main_Durasi_Biaya.</p>

<p>Harap lakukan pembayaran dan konfirmasi sebelum pukul
<?php echo $time;?>. Jika terlambat, transaksi akan dibatalkan
secara otomatis oleh system. Terimakasih.</p>
