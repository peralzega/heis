<table>
<?php
include "connect.php";
$currDate = date('Y-m-d');
$i = 10;
while ($i<=22) {
	$select1	= "SELECT * FROM transaksi WHERE PlayDate='2015-05-05' AND PlayStart=$i AND Field='Semen'";
	$query1		= mysqli_query($con, $select1);
	$row1		= mysqli_num_rows($query1);
	if ($row1 > 0) {
		$fetch	= mysqli_fetch_array($query1);
		$j		= $fetch['PlayEnd'];
		$selisih= $j - $i;
		while ($selisih>=0) { ?>
			<tr><td><?php echo $i; ?></td>
			    <td><?php echo "Booked"; ?></td>
			</tr>
<?php		$i++; $selisih--;	
		}
	} else { ?>
		<tr><td><?php echo $i; ?></td>
			<td><?php echo "Free!"; ?></td>
	    </tr>
<?php	$i++;	
	}
}
?>
</table>