<?php
include '../../koneksi.php';

$id_ibu = $_GET['id_ibu'];
$sql = mysqli_query($dbh,"delete from ibu_hamil where id_ibu='$id_ibu'") or die(mysqli_error($dbh));
	
	if ($sql) {
			echo "<script>alert('Data Berhasil Dihapus');document.location='../data-admin.php' </script> ";
		}else {
			echo "<script>alert('Data Gagal Dihapus);document.location='../data-admin.php' </script> ";
		}
?>