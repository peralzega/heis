<?php
// include('cek-login.php');
?> 
<?php
include('config.php');
$search = $_POST['cari_transaksi'];
?>

 
<html>
<head>
<title>Heis</title>
</head>
 
<body>
<h1>Data Lapangan</h1>
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil meng-update data!</h3>';
}
?>
 
<a href="home.php">Beranda</a> || <a href="view_lapangan.php">Data Lapangan</a> || <a href="view_user.php">Data User</a> || <a href="logout.php">Keluar</a>
<br>
<a href="tambah_lapangan.php">+ Tambah Lapangan</a>
 
 
<form name="cari_transaksi" action="search_transaksi.php" method="post">
<input type= "date" name="cari_transaksi" />
<input type="submit" name="submit" value="cari"/>
 </form> 
 
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <td>OrderID</td>
			<td>Jam Booking</td>
			<td>Lapangan</td>
			<td>Tanggal Pakai</td>
			<td>Durasi</td>
			<td>Username</td>
			<td>no Hp</td>
			<td>Harga</td>
			<td>Status</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from transaksi where PlayDate='$search' ");
	
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $data['OrderID']; ?></td>
			<td><?php echo $data['OrderTime']; ?></td>
			<td><?php echo $data['Field']; ?></td>
			<td><?php echo $data['PlayDate']; ?></td>
			<td><?php echo $data['PlayStart']; ?>-<?php echo $data['PlayEnd']; ?></td>
			<td><?php echo $data['User_ID'];$a=$data['User_ID']; ?></td>
			<?php $no_hp = mysql_query("select Phone from pengguna where UserID='$a'");?>
			<td><?php while ($data1 = mysql_fetch_array($no_hp)) {echo $data1['Phone']; }?></td>
            <td><?php echo $data['Charge']; ?></td>            
            <td><?php echo $data['Stats']; ?></td>
            </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>