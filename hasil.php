<?php 

include 'koneksi.php';

$nama = $_POST['namaibu'];
$lahir = $_POST['umur'];
$lila = $_POST['lila'];
$bb = $_POST['bb'];
$paritas = $_POST['paritas'];
$hemo= $_POST['hemo'];

if ($lila <= 23.5) {
	$kondisi = "Kondisi Ibu Kekurangan Energi Kronis (KEK)";
	$saran = "Protein, Karbohidrat, dan Lemak";
}
elseif($bb <= 41 && $paritas <=2){
	$kondisi = "Kondisi Ibu Kekurangan Energi Kronis (KEK)";	
	$saran = "Protein, Karbohidrat, dan Lemak";
}
elseif ($hemo <= 11 && $paritas <=2) {
	$kondisi = "Kondisi Ibu Kekurangan Energi Kronis (KEK)";
	$saran = "Protein, Karbohidrat, dan Lemak";
}
elseif ($hemo <= 11 && $bb <= 41 && $paritas <=2) {
	$kondisi = "Kondisi Ibu Kekurangan Energi Kronis (KEK)";	
	$saran = "Protein, Karbohidrat, dan Lemak";
}
else{
	$kondisi = "Kondisi Ibu Normal";
	$saran = "Vitamin C, VItamin B6, Vitamin D dan Kalsium";
}




$sql=mysqli_query($dbh,"INSERT INTO hasil_klasifikasi (nama_ibu_hasil, lahir_ibu_hasil, berat_badan_hasil, lingkar_lengan_atas_hasil, hemoglobin_hasil, paritas_hasil) VALUES ('$nama', '$lahir', '$bb', '$lila', '$hemo', '$paritas')");

 echo "<script>alert('Data berhasil tersimpan'); </script> ";
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
      <a class="navbar-brand" href="index.php">Klasifikasi Kesehatan Ibu Hamil</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Beranda</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
    </ul>
  </div>
</nav>
<!-- END NAV -->

<div class="panel panel-default">
	<div class="panel-heading">
 			<h2 class="text-center"> Hasil Klasifikasi Kesehatan Ibu <?php echo $_POST['namaibu']; ?></h2>
 	</div>

 	<div class="panel-body">
 		<div class="row">
 			<div class="col-sm-3 col-md-2">
 				<h3>Nama Ibu</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>: &nbsp; <?php echo $_POST['namaibu']; ?></h3>
 			</div>
 			<div class="col-sm-6 col-md-2">	
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>Lingkar Lengan Atas (LILA)</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>: &nbsp; <?php echo $_POST['lila']; ?> cm</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">	
 			</div>
 		</div>	

 		<div class="row">
 			<div class="col-sm-6 col-md-2">
 				<h3>Umur</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>: &nbsp; <?php echo $_POST['umur']; ?> Tahun</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">	
 			</div>

 			<div class="col-sm-6 col-md-2">
 				<h3>Hemoglobin</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>: &nbsp; <?php echo $_POST['hemo']; ?> dL</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">	
 			</div>
 		</div>

 		<div class="row">
 			<div class="col-sm-6 col-md-2">
 				<h3>Berat Badan (BB)</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>: &nbsp; <?php echo $_POST['bb']; ?> kg</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">	
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>Paritas</h3>
 			</div>
 			<div class="col-sm-6 col-md-2">
 				<h3>: &nbsp; <?php echo $_POST['paritas']; ?></h3>
 			</div>
 			<div class="col-sm-6 col-md-2">	
 			</div>
 		</div>
 	</div>
	
</div>
<div class="panel-heading">
      <h2 class="text-center"> Hasil Klasifikasi Kesehatan Ibu <?php echo $_POST['namaibu']; ?> adalah <?php echo $kondisi; ?></h2>
  </div>

<center>
<div class="footer-basic">
        <footer>
            <p class="copyright">Duita Rofika © <?php echo date("Y") ?></p>
        </footer>
    </div>
   
 </center>
</body>
</html>