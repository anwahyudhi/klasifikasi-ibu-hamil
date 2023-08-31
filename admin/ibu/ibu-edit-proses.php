<?php
include '../../koneksi.php';

$id = $_GET['id_ibu'];
$nama = $_POST['nama'];
$lahir = $_POST["lahir"];
$berat = $_POST['berat'];
$lila = $_POST["lila"];
$hemoglobin = $_POST['hemoglobin'];
$paritas = $_POST['paritas'];

$sql=mysqli_query($dbh,"UPDATE ibu_hamil set nama_ibu='$nama', lahir_ibu = '$lahir', berat_badan = '$berat', lingkar_lengan_atas = '$lila', hemoglobin = '$hemoglobin', paritas= '$paritas' WHERE id_ibu = '$id'");
 
if ($sql) {
    echo "<script>alert('Data berhasil tersimpan');document.location='../data-admin.php' </script> ";
}else {
    echo "<script>alert('Data gagal iubah');document.location='../data-admin.php' </script> ";
    
}
?>