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
 			<h4 class="text-center"> Input Klasifikasi Kesehatan Ibu Hamil</h4>
 	</div>

 	<div class="panel-body">
 		<div class="container">
 			<form class="form" action="hasil.php" method="POST">
 				
 				<div class="form-group">
 					<label>Nama Ibu:</label>
 					<input type="text" name="namaibu" class="form-control" required="true"
          placeholder="Masukkan Nama Ibu">
 				</div>

 				<div class="form-group">
 					<label>Umur Ibu:</label>
 					<input type="number" name="umur" class="form-control" required 
          placeholder="Masukkan Umur Ibu">
 				</div>

        <div class="form-group">
          <label class>Berat Badan Ibu: (Kilogram)</label>
          <input type="number" name="bb" class="form-control" required step="0.01"
          placeholder="Masukkan Berat Badan Ibu dengan Satuan Kilogram">
        </div>

        <div class="form-group">
          <label>Linkar Lengan Atas (LILA): (Centimeter)</label>
          <input type="number" name="lila" class="form-control" required step="0.01"
          placeholder="Masukkan Lingkar Lengan Atas (LILA) Ibu dengan Satuan Centimeter">
        </div>

        <div class="form-group">
          <label>Hemoglobin: (dL)</label>
          <input type="number" name="hemo" class="form-control" required step="0.01" max="16" 
          placeholder="Masukkan Kadar Hemoglobin Ibu dengan Satuan dL">
        </div>

        <div class="form-group">
          <label>Paritas:</label>
          <input type="number" name="paritas" class="form-control" max="6" required
          placeholder="Masukkan Jumlah Paritas pada Ibu">
        </div>


 				
 				<div class="form-group">
							<input type="reset" required name="Reset" class="btn btn-warning btn-fill"> 
							<input type="submit" required name="hasil" value = "hasil" class="btn btn-primary pull-right btn-fill" onclick="return confirm('Apa anda yakin dengan  data anda?');">
				</div>
 			</form>
 		</div>
 	</div>
 	
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