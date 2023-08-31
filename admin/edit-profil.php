<?php 
session_start();
include "../koneksi.php";
$id = $_SESSION['username'];
$query=mysqli_query($dbh,"select * from pengguna where username = '$id'");
$data=mysqli_fetch_array($query);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi Kesehatan Ibu Hamil</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><link rel="stylesheet" href="../assets/css/Footer-Basic.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../assets/css/styles.css">
 </head>
 <body>
 <!-- START NAV -->
 	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index-admin.php">Klasifikasi Kesehatan Ibu Hamil</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index-admin.php">Beranda</a></li>
      <li><a href="data-admin.php">Data Training</a></li>
      <li><a href="tabel-hamil.php">Data Hasil Klasifikasi</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="edit-profil.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama']; ?></a></li>
      <li>
            <a class="btn" href="logout.php">   
            <span class="glyphicon glyphicon-log-out"></span> Keluar</a></li> 
    </ul>
  </div>
</nav>

 <!-- END NAV -->

 <div class="panel panel-default">
 	<div class="panel-heading">
 			<h4 class="text-center"> Edit Data Profil Admin <?php echo $_SESSION['nama'] ?></h4>
 	</div>

 	<div class="panel-body">
 		<div class="container">
 			<form class="form" action="proses-edit-profil.php" method="POST">
 				<div class="form-group">
 					<label>Username:</label>
 					<input type="text" name="username" class="form-control" readonly value="<?php echo $_SESSION['username'] ?>">
 				</div>

 				<div class="form-group">
 					<label>Nama Admin:</label>
 					<input type="text" name="nama" class="form-control"  value="<?php echo $_SESSION['nama'] ?>">
 				</div>

 				<div class="form-group">
 					<label>Password lama:</label>
 					<input type="password" name="passlama" class="form-control" readonly id="alamatpalsu" value="<?php echo $data['password'] ?>">
 					
 				</div>	

 				<div class="form-group">
 					<label>Password baru:</label>
 					<input type="password" name="passbaru" class="form-control" required id="alamatbaru">

 					<br>
 					<input type="button" onclick="myFunction1()" class="btn" value="Lihat Password">
 				</div>
 				
 				<div class="form-group">
							<input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
							<input type="submit" required name="update" value = "update" class="btn btn-primary pull-right btn-fill" onclick="return confirm('Apa anda yakin dengan pengubahan data?');">
				</div>
 			</form>
 		</div>
 	</div>
 	
 </div>


 </body>
 </html>

 <script>
var x = document.getElementById("alamatpalsu");
var y = document.getElementById("alamatbaru");
function myFunction() {
	if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
	}
}

function myFunction1() {
	if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
	}
}
</script>