<?php
include '../../koneksi.php';

$nama = $_POST['nama'];
$lahir = $_POST["lahir"];
$berat = $_POST['berat'];
$lila = $_POST["lila"];
$hemoglobin = $_POST['hemoglobin'];
$paritas = $_POST['paritas'];

$sql=mysqli_query($dbh,"INSERT INTO ibu_hamil (nama_ibu, lahir_ibu, berat_badan, lingkar_lengan_atas, hemoglobin, paritas) VALUES ('$nama', '$lahir', '$berat', '$lila', '$hemoglobin', '$paritas')");
 
if ($sql) {
    echo "<script>alert('Data berhasil tersimpan');document.location='../data-admin.php' </script> ";
}else {
    echo mysqli_error($dbh);
    
}
?>