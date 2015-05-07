<?php
session_start();
include "../connect.php";
$i		= $_GET['jam'];
$date	= $_GET['date'];
$field	= $_GET['field'];
?>

<form method="POST" action="check-book.php">
	<input type="hidden" value="<?php echo $i;?>" name="jam" />
	<input type="hidden" value="<?php echo $date;?>" name="date" />
	<input type="hidden" value="<?php echo $field;?>" name="field" />
	<label>Masukkan durasi (jam)</label><br/>
	<input type="number" min="1" max="10" name="durasi" />
	<input type="submit" value="Ok" />
</form>