
 
<?php
// deklarasi parameter koneksi database
$host   = "localhost";
$username = "root";
$password = "";
$database = "i_siswa";

// Koneksi dan memilih database di server
$db = mysqli_connect($host,$username,$password,$database) or die("Gagal koneksi database");
$query = "SELECT * FROM is_siswa";
$hasil= mysqli_query($db, $query);
$data_user=mysqli_fetch_assoc($hasil);
//mysqli_connect($server,$username,$password) or die("Koneksi MySQL Gagal : " .mysqli_error());
//mysqli_select_db($database) or die ("Koneksi Database Gagal : " .mysqli_error());
?>