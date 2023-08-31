<?php
include "../koneksi.php";
$user=$_POST['username'];
$nama = $_POST['nama'];
$passlama = $_POST['passlama'];
$passbaru = $_POST['passbaru'];


$sql=mysqli_query($dbh,"UPDATE pengguna set nama_pengguna='$nama', password='$passbaru' where username='$user'");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='index-admin.php' </script> ";
}else {
    echo mysqli.error($dbh);
    echo "<script>alert('Data gagal iubah');document.location='index-admin.php' </script> ";
}
?>  