<?php
session_start();
include "../connect.php";
include "change-month.php";
$date	= $_POST['date'];
$bulan	= substr($date,5,2); //2015-05-06
$bulan2	= changemonth($bulan);
$tanggal= substr($date,8,2);
$tahun	= substr($date,0,4);
$field 	= $_POST['field'];

/* Jika pengguna belum login */
if (empty($_SESSION['userid']) AND empty($_SESSION['userpass'])) {
	echo "Untuk memesan lapangan, Anda harus login dulu. <br>";
	echo "<a href=\"../index.php\"><b>LOGIN</b></a>";
} else { ?>

<!--- Jika pengguna sudah login -->
<p>Selamat datang, <?php echo $_SESSION['userid']; ?></p>
<a href="home-default.php">Beranda</a>    
<a href="profile.php">Profile</a>    
<a href="logout.php">Keluar</a></br> 

<h2>Pesan Lapangan</h2>
<form method="POST" action="home.php">
	<input type="date" name="date" />
	<select name="field">
		<option selected="selected" value="Semen">Semen</option>
		<option value="Sintetis">Sintetis</option>
		<option value="Vinyl">Vinyl</option>
	</select> 
	<input type="submit" value="Ok" /> <br/>
</form>
<table border="1" style="width:400px; border-collapse:collapse">
	<caption>Jadwal <?php echo $tanggal." ".ucfirst($bulan2)." ".$tahun; ?> | Lapangan <?php echo $field;?></caption>
	<tr><th style="width:10%">Jam</th><th>Status</th><th>Aksi</th></tr>
	<?php $i=10;
		  while ($i<=22) {
			$select1	= "SELECT * FROM transaksi WHERE PlayDate='$date' AND PlayStart=$i AND Field='$field'";
			$query1		= mysqli_query($con, $select1);
			$row1		= mysqli_num_rows($query1);
			if ($row1 > 0) {
				$fetch	= mysqli_fetch_array($query1);
				$j		= $fetch['PlayEnd'];
				$selisih= $j - $i;
				while ($selisih>0) { ?>
					<tr><td><?php echo $i; ?></td>
						<td><?php echo "Booked"; ?></td>
						<td></td>
					</tr>
		<?php		$i++; $selisih--;	
				}
			} else { ?>
				<tr><td><?php echo $i; ?></td>
					<td><?php echo "Free!"; ?></td>
					<td><a href="booking.php?jam=<?php echo $i; ?>&date=<?php echo $date; ?>&field=<?php echo $field; ?>">Pesan</a></td>
				</tr>
		<?php	$i++;	
			}
		  }
		?>
</table>
<?php } ?>