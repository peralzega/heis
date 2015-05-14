<?php
session_start();
include "../connect.php";
$i		= $_GET['jam'];
$date	= $_GET['date'];
$field	= $_GET['field'];
?>

<p>Selamat datang, <?php echo $_SESSION['userid']; ?></p>
<a href="home-default.php">Beranda</a>    
<a href="profile.php">Profile</a>    
<a href="logout.php">Keluar</a></br> 


<h2>Masukkan durasi (jam)</h2>
<form method="POST" action="check-book.php">
	<input type="hidden" value="<?php echo $i;?>" name="jam" />
	<input type="hidden" value="<?php echo $date;?>" name="date" />
	<input type="hidden" value="<?php echo $field;?>" name="field" />
	<input type="number" min="1" max="10" name="durasi" />
	<input type="submit" value="Ok" />
</form>