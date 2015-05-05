<?php
session_start();
include "../connect.php";
include "change-month.php";
$user = $_SESSION['userid'];
$date = date('Y-m-d');
$time = date('G:i:s');
$month = substr($date,5,2);
$month_new = changemonth($month);
$year = substr($date,0,-6);
$name = $month_new.$year;
$query = "SELECT * FROM lapangan ORDER BY FieldName";
$show = mysqli_query($con, $query);
$query2 = "SELECT * FROM $name WHERE Field_Name='Semen'";
$show2 = mysqli_query($con, $query2) or die("Error: ".mysqli_error($con));;

if (empty($_SESSION['userid']) AND empty($_SESSION['userpass'])) {
	echo "Untuk memesan lapangan, Anda harus login dulu. <br>";
	echo "<a href=\"../index.php\"><b>LOGIN</b></a>";
} else { ?>

<p>Selamat datang, <?php echo $_SESSION['userid']; ?></p>
<a href="home.php">Beranda</a>    
<a href="profile.php">Profile</a>    
<a href="logout.php">Keluar</a></br> 

<h2>Pesan Lapangan</h2>
<form method="POST" action="pick-schedule.php">
<input type="date" name="datepicker" />
<select>
	<?php while ($r=mysqli_fetch_array($show)) { ?>
	<option value="<?php echo $r['FieldID'];?>"><?php echo $r['FieldName']; ?></option>
	<?php } ?>
</select> 
<input type="submit" value="Ok" /> <br/>
</form>
<table>
<caption>Jadwal Hari Ini (Lapangan Semen)</caption>
<tr><th>Jam</th><th>Status</th><th>Aksi</th></tr>
<?php while ($s = mysqli_fetch_array($show2)) { ?>
<tr><td><?php echo $s['Hour']; ?></td>
    <td><?php
        if ($s['Status'] == 0) {
			echo "Free!";
		} else {
			echo "Booked";
		}
	    ?>
	</td>
	<td><?php
		if ($s['Status'] == 0) {
			echo "<a href=\"booking.php?order_date=$date&order_time=$time&start=$s[Hour]&field=$s[Field_Name]\">Pesan</a>";
		} else {
			echo "";
		}
	    ?>
	</td>
</tr>
<?php } ?>
</table>

<?php } ?>