<?php
session_start();
include "../connect.php";
$currDate		= date('Y-m-d');
$transaksi		= "SELECT * FROM transaksi WHERE PlayDate='$currDate' AND Field='Semen'";
$showTrans		= mysqli_query($con,$transaksi) or die("Error: ".mysqli_error($con));;
$lapangan		= "SELECT * FROM lapangan ORDER BY FieldName";
$showField		= mysqli_query($con, $lapangan);
/* $currTime	= date('G:i:s'); */

/* Jika pengguna belum login */
if (empty($_SESSION['userid']) AND empty($_SESSION['userpass'])) {
	echo "Untuk memesan lapangan, Anda harus login dulu. <br>";
	echo "<a href=\"../index.php\"><b>LOGIN</b></a>";
} else { ?>

<!--- Jika pengguna sudah login -->
<p>Selamat datang, <?php echo $_SESSION['userid']; ?></p>
<a href="home.php">Beranda</a>    
<a href="profile.php">Profile</a>    
<a href="logout.php">Keluar</a></br> 

<h2>Pesan Lapangan</h2>
<form method="POST" action="home.php">
	<input type="date" name="datepicker" />
	<select>
		<?php while ($f=mysqli_fetch_array($showField)) { ?>
			<option value="<?php echo $f['FieldID'];?>"><?php echo $f['FieldName']; ?></option>
		<?php } ?>
	</select> 
	<input type="submit" value="Ok" /> <br/>
</form>
<table>
	<caption>Jadwal Hari Ini (Lapangan Semen)</caption>
	<tr><th>Jam</th><th>Status</th><th>Aksi</th></tr>
	<?php $i=10;
	      $j=10;
		  while ($i<=22 || $t=mysqli_fetch_array($showTrans)) {
			
	?>
	<tr><td><?php echo $i; ?></td>
	    <td><?php if ($x0 == 0) {
					echo "Free!";
				  } else {
					echo "Booked";
				  }
		    ?>
		</td>
		<td></td>
	</tr>
	<?php $i++; } ?>
</table>
<?php } ?>