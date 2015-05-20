
<html>
<head>
<title>Heis</title>
</head>
 
<body>
<h1>Form Input Data</h1>

 
<?php


if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil sign up!</h3>';
}

?>
 

 
<form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>UserID</td>
            <td>:</td>
            <td><input type="text" name="userid" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" maxlength="20" required="required" /></td>
        </tr>
        
        <tr>
        <td>Nomor HP</td>
            <td>:</td>
            <td><input type="text" name="no_hp" maxlength="14" required="required" /></td>
        </tr>
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
<a href="login.php">Sign in</a>


</body>
</html>