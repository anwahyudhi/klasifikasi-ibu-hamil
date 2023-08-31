<?php 
	include "../koneksi.php";
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi Kesehatan Ibu Hamil</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><link rel="stylesheet" href="../assets/css/Footer-Basic.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../assets/css/styles.css">
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
 			<h4 class="text-center"> Tabel Data Training Ibu Hamil</h4>
 		</div>
 		<div class="panel-body">
      <center>
       <a href="bersih-pol.php" class="btn btn-success btn-sm btn-fill">Pembersihan Data</a>
     </center>
        
        <form class="form-inline pull-right" action="" method="post">
          <div class="form-group">
          <label> Cari Nama Ibu</label>
              <input type="text" class="form-control" name="cariibu" placeholder="masukkan nama ibu"> 
          </div>
          <div class="form-group">
            <input class="btn btn-fill btn-success" type="submit"  value="cari" name="button" id="button">
          </div>
        </form>

       <form class="form-inline" method="post" enctype="multipart/form-data" action="ibu/upload_ibu.php" >
        <div class="form-group">
          Pilih File: 
        <input class="form-control" name="databaru" type="file" required="required"> 
       <input name="upload" class="btn btn-default" type="submit" value="Import">    
        </div>
      </form>
      <br><br>
 			<div class="table-responsive">
 				<table class="table table-hover table-bordered">
 					<thead>
 						<tr>
 							<th>No</th>
 							<th>Nama Ibu</th>
 							<th>Umur</th>
 							<th>Berat Badan</th>
 							<th>Lingkar Lengan Atas</th>
 							<th>Hemoglobin</th>
 							<th>Paritas</th>
 							<th>Aksi</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php
            if (isset($_POST['cariibu'])) {
                $cari = $_POST['cariibu'];
                $sql = "SELECT * FROM ibu_hamil where nama_ibu LIKE '$cari%' or nama_ibu LIKE '%$cari%' or nama_ibu LIKE '%$cari' ";
              }  
              else{
                $sql = "SELECT * FROM ibu_hamil";    
              }

                        $no  = 1; 
                        foreach ($dbh->query($sql) as $data) :
                        ?>
                        <tr>
                        	<td> <?php echo $no; ?> </td>
                        	<td> <?php echo $data['nama_ibu']; ?></td>
                        	<td> <?php echo $data['lahir_ibu']; ?> Tahun</td>
                        	<td> <?php echo $data['berat_badan']; ?> Kg</td>
                        	<td> <?php echo $data['lingkar_lengan_atas']; ?> Cm</td>
                        	<td> <?php echo $data['hemoglobin']; ?> dL</td>
                        	<td> <?php echo $data['paritas']; ?></td>
                        	<td> 
                        		<!-- pake kontroller -->
                        		<a href="ibu/ibu-edit.php?id_ibu=<?php echo $data['id_ibu'] ?>" class="btn btn-info btn-sm btn-fill">
                                        <span class="glyphicon glyphicon-pencil">
									</a>   
								
								<a class="btn btn-warning btn-sm btn-fill" href="ibu/ibu-hapus.php?id_ibu=<?php echo $data['id_ibu'] ?>" onclick="return confirm('Apa anda yakin dengan penghapusan data?');">
                               	<span class="glyphicon glyphicon-trash"> 
								</a>
                        	</td>
                        	
                        </tr>
                        <?php
                        $no++; 	
                        endforeach;
                         ?>
 					</tbody>
 				</table>	
 			</div>
 		</div>
 	</div>
 	<div class="footer-basic">
        <footer>
            <p class="copyright">Duita Rofika © <?php echo date("Y") ?></p>
        </footer>
    </div>
 
 </body>
 </html>