<?php 
include "../koneksi.php";
session_start();
 ?>

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
  <div class="highlight-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Selamat Datang Admin <?php echo $_SESSION['nama']; ?></h2>
                <p class="text-center">
                    ini adalah sebuah wesite untuk mengetahui klasifikasi kesehatan ibu hamil berdasarkan berat badan, lingkar lengan atas, hemoglobin, dan paritas. setelah mengetahui keadaan kesehatan ibu hamil akan diberikan saran untuk kembali sehat. salam sehat!
                </p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="data-admin.php">Data Ibu Hamil</a></div>

        </div>
    </div>
    
    <div class="footer-basic">
        <footer>
            <p class="copyright">Duita Rofika © <?php echo date("Y") ?></p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>