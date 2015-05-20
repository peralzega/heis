<?php
session_start();
$con = mysqli_connect("localhost","root","","heis");
$select ="SELECT * FROM pengguna WHERE Role='Admin'";
$query = mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SuperAdmin Home</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <div role="container">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="HomeAdmin.php" aria-controls="home" role="tab" data-toggle="tab">Daftar Admin</a></li>
    <li><a href="SATambah.php" aria-controls="profile" role="tab" data-toggle="tab">Tambah Admin</a></li>
    <li><a href="SALaporan.php" aria-controls="messages" role="tab" data-toggle="tab">Laporan Heis Futsal</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    	
    	<button type="button" class="btn btn-default"><a href="SATambah.php">Tambah Baru</a></button>
    	<br/>
    		<div class="table-responsive">
        <table class="table table-hover">
    				<thead>
    					<th>UserID</th>
    					<th>No.HP</th>
    					<th>Role</th>
    				</thead>
                    <tbody>
            <?php        
                    while($fetch=mysqli_fetch_array($query)){ ?>
    				<tr>
    					<td><?php echo $fetch['UserID']; ?></td>
    					<td><?php echo $fetch['Phone']; ?></td>
    					<td><?php echo $fetch['Role']; ?></td>
                    </tr>
                    <?php } ?>
    				</tbody>
  			</table>
        
			</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    	<form>
  			<div class="field">
    			<label for="username">Username Admin :</label>
    				<input type="text" id="username" name="userid" value="" placeholder="Username" class="login" />
  			</div>
  			<div class="field">
   				<label for="hp">No.HP :</label>
    			<input type="tel" id="lastname" name="hp" value="" placeholder="No.HP" class="login" />
  			</div>
  			<div class="field">
    			<label for="password">Password :</label>
    			<input type="password" id="password" name="pass1" value="" placeholder="Password" class="login" />
  			</div>
  			<div class="field">
    			<label for="confirm_password">Confirm Password :</label>
				<input type="password" id="confirm_password" name="pass2" value="" placeholder="Confirm Password" class="login"/>
    			</label>
  			</div>
  			<button type="submit" class="btn btn-primary">Submit</button>
  			<button type="reset" class="btn btn-default">Reset</button>
		</form>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
    	<h3>Laporan Bulanan Heis Futsal</h3>
    	<div class="table-responsive">
  				<table class="table table-hover">
    				<thead>
    					<th>Bulan</th>
    					<th>Vinyl</th>
    					<th>Semen</th>
    					<th>Sintetis</th>
    				</thead>
    				<tbody>
    				  <tr>
    					<td>Januari</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Februari</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Maret</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>April</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Mei</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Juni</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Juli</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Agustus</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>September</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Oktober</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>November</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    					<tr>
    					<td>Desember</td>
    					<td>Query</td>
    					<td>Query</td>
    					<td>Query</td>
    					</tr>
    				</tbody>
  				</table>
			</div>
    </div>
  </div>

</div>


  </body>
</html>