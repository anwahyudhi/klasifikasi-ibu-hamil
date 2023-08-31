<?php 
include "../../koneksi.php";
include "excel_reader2.php";

$target = basename($_FILES['databaru']['name']);
move_uploaded_file($_FILES['databaru']['tmp_name'], $target);
 

chmod($_FILES['databaru']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['databaru']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama     = $data->val($i, 1);
	$umur   = $data->val($i, 2);
	$bb  = $data->val($i, 3);
 	$lila  = $data->val($i, 4);
 	$hb  = $data->val($i, 5);
 	$paritas  = $data->val($i, 6);
 	
	if($nama != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($dbh,"INSERT INTO ibu_hamil (nama_ibu, lahir_ibu, berat_badan, lingkar_lengan_atas, hemoglobin, paritas) VALUES ('$nama', '$umur', '$bb', '$lila', '$hb', '$paritas')");
		$berhasil++;
	}
	
		
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['databaru']['name']);
 
// alihkan halaman ke index.php
header("location:../data-admin.php?berhasil=$berhasil");
?>

 ?>