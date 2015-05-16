<?php
include "../connect.php";
session_start();
$playdt = $_GET['playdt'];
$play0	= $_GET['play0'];
$play1	= $_GET['play1'];
$durasi = $_GET['durasi'];
$field  = $_GET['field'];
$harga	= $_GET['harga'];
$time	= date('G:i');
$orderdt= date('Y-m-d');
$user	= $_SESSION['userid'];

$insert	= "INSERT INTO transaksi(OrderDate,
								 OrderTime,
								 PlayDate,
								 PlayStart,
								 PlayEnd,
								 Field,
								 User_ID,
								 Charge,
								 Stats)
						  VALUES('$orderdt',
						         '$time',
								 '$playdt',
								 '$play0',
								 '$play1',
								 '$field',
								 '$user',
								 '$harga',
								 0)";
$query	= mysqli_query($con, $insert);

if ($query == TRUE) {
?>

<h2>Pembayaran</h2>
<p>Transaksi Anda telah selesai. Silahkan lakukan
pembayaran ke no.rekening 123456 (BCA) sebesar <?php echo $harga;?>.
Lalu lakukan konfirmasi pembayaran ke nomor 0812 3456 7890
dengan format SMS: Username_Tanggal Main_Jam Main_Durasi_Biaya.</p>

<p>Harap lakukan pembayaran dan konfirmasi sebelum pukul
<?php echo $time;?>. Jika terlambat, transaksi akan dibatalkan
secara otomatis oleh system. Terimakasih.</p>

<a href="home-default.php"><button>Ok</button></a>
<a href="logout.php"><button>Ok - Logout</button></a>

<?php
}
?>
