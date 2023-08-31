<?php 
session_start();
include "../../koneksi.php";
$id = $_SESSION['username'];
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
      <a class="navbar-brand" href="../index-admin.php">Klasifikasi Kesehatan Ibu Hamil</a>
    </div>
     <ul class="nav navbar-nav">
      <li><a href="../index-admin.php">Beranda</a></li>
      <li><a href="../data-admin.php">Data Training</a></li>
      <li><a href="../tabel-hamil.php">Data Hasil Klasifikasi</a></li>
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
 			<h4 class="text-center"> Tambah Data Ibu Hamil</h4>
     
 	</div>

 	<div class="panel-body">
 		<div class="container">
 			<form class="form" action="tambah-ibu-proses.php" method="POST">
 				<div class="form-group">
 					<label>Nama Ibu:</label>
 					<input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama Ibu">
 				</div>

 				<div class="form-group">
 					<label>Umur Ibu:</label>
 					<input type="number" name="lahir" class="form-control" required placeholder="Masukkan Umur Ibu">
 				</div>

 				<div class="form-group">
 					<label>Berat Badan Ibu: (Kilogram)</label>
 					<input type="number" name="berat" class="form-control" step="0.01" required placeholder="Masukkan Berat Badan Ibu dengan Satuan Kilogram">
 				</div>

 				<div class="form-group">
 					<label>Lingkar Lengan Atas (LILA) Ibu: (Centimeter)</label>
 					<input type="number" name="lila" class="form-control" step="0.01" required
          placeholder="Masukkan Lingkar Lengan Atas (LILA) Ibu dengan Satuan Centimeter">
 				</div>

 				<div class="form-group">
 					<label>Hemoglobin Ibu: (dL)</label>
 					<input type="number" name="hemoglobin" class="form-control" step="0.01" max = "16" required
          placeholder="Masukkan Kadar Hemoglobin Ibu dengan Satuan dL">
 				</div>

 				<div class="form-group">
 					<label>Paritas Ibu:</label>
 					<input type="number" name="paritas" class="form-control" step="1" max = "6" required
          placeholder="Masukkan Jumlah Paritas pada Ibu"
          >
 				</div>

 				<div class="form-group">
							<input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
							<input type="submit" required name="Tambah" value = "Tambah" class="btn btn-success pull-right btn-fill" onclick="return confirm('Apa anda yakin dengan Penambahan data?');">
				</div>
 			</form>
 		</div>
 	</div>
 	
 </div>


 </body>
 </html>
