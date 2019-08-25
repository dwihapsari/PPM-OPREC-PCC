
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	// $id				= $_POST['id'];
	$nama			= $_POST['nama'];
	$jurusan		= $_POST['jurusan'];
	$prodi			= $_POST['prodi'];
	$no_telepon			= $_POST['no_telepon'];
	$idline			= $_POST['idline'];

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db,"INSERT INTO is_siswa(
											 	nama,
												jurusan,
												prodi,
												no_telepon, 
												idline)	
										VALUES(	'$nama',
												'$jurusan',
												'$prodi',
												'$no_telepon',
												'$idline')") or mysqli_errno($db);		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}						
}
?>