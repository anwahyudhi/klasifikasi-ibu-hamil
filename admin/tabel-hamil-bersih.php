 <?php 
include "../koneksi.php";
  session_start();
  $kek = 0;
  $normal = 0;
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi Kesehatan Ibu Hamil</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><link rel="stylesheet" href="assets/css/Footer-Basic.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
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
 	<div class="panel panel-default">
 		<div class="panel-heading">
 			<h4 class="text-center"> Tabel Data Klasifikasi Ibu Hamil</h4>
 		</div>
 		<div class="panel-body">
 			<div class="table-responsive">
 				<table class="table table-hover table-bordered table-condensed">
 					<thead>
 						<tr>
 							<th>No</th>
 							<th>Nama Ibu</th>
 							<th>Umur</th>
 							<th>Berat Badan</th>
 							<th>Lingkar Lengan Atas</th>
 							<th>Hemoglobin</th>
 							<th>Paritas</th>
 							<th>Keterangan</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php
               $sql = "SELECT * FROM ibu_hamil where nama_ibu > '' AND lahir_ibu > '' AND berat_badan > '' AND lingkar_lengan_atas > '' AND hemoglobin > '' AND paritas > '' UNION SELECT * FROM hasil_klasifikasi where nama_ibu_hasil > '' AND lahir_ibu_hasil > '' AND berat_badan_hasil > '' AND lingkar_lengan_atas_hasil > '' AND hemoglobin_hasil > '' AND paritas_hasil > '' ";
          
 						                $no  = 1; 
                        foreach ($dbh->query($sql) as $data) :
                            if ($data['lingkar_lengan_atas'] <= 23.5) {
                                $kondisi = "KEK";
                                $kek++;

                            }
                            elseif($data['berat_badan'] <= 41 && $data['paritas'] <=2){
                               $kondisi = "KEK";
                               $kek++;
                            }
                            elseif ($data['hemoglobin'] <= 11 && $data['paritas'] <=2) {
                               $kondisi = "KEK";
                               $kek++;
                            }
                            elseif ($data['hemoglobin'] <= 11 && $data['berat_badan'] <= 41 && $data['paritas']<=2) {
                                $kondisi = "KEK";
                                $kek++;
                            }
                            else{
                                $kondisi = "Normal";
                                $normal++; 
                                }


                        ?>                        
                        <tr>

                        	<td> <?php echo $no; ?> </td>
                        	<td> <?php echo $data['nama_ibu']; ?></td>
                            <td> <?php echo $data['lahir_ibu']; ?> Tahun</td>
                            <td> <?php echo $data['berat_badan']; ?> Kg</td>
                            <td> <?php echo $data['lingkar_lengan_atas']; ?> Cm</td>
                            <td> <?php echo $data['hemoglobin']; ?> dL</td>
                            <td> <?php echo $data['paritas']; ?></td>
                        	<td> <?php echo $kondisi; ?></td>
                        </tr>
                        <?php
                        $no++; 	
                        endforeach;
                         ?>

 					</tbody>
          <center> <h4> Ibu dengan Status Normal = <?php echo $normal; ?> 
          Ibu dengan Status KEK = <?php echo $kek; ?></h4>
         
        </center>
        
        <br>
          </table>	
 			</div>
 		</div>
 	</div>
 	<div class="footer-basic">
        <footer><center>
            <p class="copyright">Duita Rofika © <?php echo date("Y") ?></p>
        </center>
            
        </footer>
    </div>
 
 </body>
 </html>