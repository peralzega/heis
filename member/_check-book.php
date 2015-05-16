<?php
session_start();
include "../connect.php";
$user 	= $_SESSION['userid'];
$i		= $_POST['jam'];
$durasi	= $_POST['durasi'];
$date	= $_POST['date'];
$orderdt= date('Y-m-d');
$ordertm= date('G:i:s');
$field	= $_POST['field'];
$total	= $i+$durasi;
$select = "SELECT * FROM transaksi WHERE PlayStart>$i AND PlayStart<$total AND PlayDate='$date' AND Field='$field'";
$query	= mysqli_query($con,$select);
$rows	= mysqli_num_rows($query);

//fetch harga lapangan
$select2 = "SELECT * FROM lapangan WHERE FieldName='$field'";
$query2  = mysqli_query($con, $select2);
$fetch	 = mysqli_fetch_array($query2);
$harga	 = $durasi * $fetch['Price'];
?>

<p>Selamat datang, <?php echo $_SESSION['userid']; ?></p>
<a href="home-default.php">Beranda</a>    
<a href="profile.php">Profile</a>    
<a href="logout.php">Keluar</a></br> 

<h2>Transaksi anda</h2>

<?php
if ($rows > 0) {
	echo "Kurangi durasi permainan";
} else {
	echo "Tanggal Pesan:"." ".$orderdt."<br>";
	echo "Jam Pesan:"." ".$ordertm."<br>";
	echo "Tanggal Main:"." ".$date."<br>";
	echo "Jam Main:"." ".$i."-".$total."<br>";
	echo "Durasi:"." ".$durasi."<br>";
	echo "Lapangan:"." ".$field."<br>";
	echo "Biaya:"." ".$harga."<br>";
	echo "User:"." ".$user."<br>";
}
?>

<a href="payment.php?playdt=<?php echo $date;?>&
                     play0=<?php echo $i; ?>&
					 play1=<?php echo $total;?>&
					 durasi=<?php echo $durasi;?>&
					 field=<?php echo $field;?>&
					 harga=<?php echo $harga;?>"><button>OK</button></a>
<a href="home-default.php"><button>Batal</button></a>