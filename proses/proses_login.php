<?php
session_start();
include ('../koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from pengguna where username = '$username' and password = '$password'";
$execute = mysqli_query($dbh,$query);
$count = mysqli_num_rows($execute);
$hasil = mysqli_fetch_array($execute);
$nama = $hasil['nama_pengguna'];
$level = $hasil['tugas'];

if($count == 0) { // jika salah, redirect ke login
	?><script language="JavaScript">alert('Login Gagal  !'); 
			document.location='../login.php'</script><?php
}
else { // jika benar, redirec ke halaman utama
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama;
    ?>
        <script language="JavaScript">
            alert('Masuk Gan!');
            document.location='../admin/index-admin.php'; 
        </script>
    <?php
   
    
	
}
?>