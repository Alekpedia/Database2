<?php 
	include_once("koneksi.php");

	$kode= $_GET['kode'];

	$query="DELETE FROM pelanggan WHERE kode='$kode'";
	$hasil=mysqli_query($koneksi,$query);

	if(!$hasil)
		die("Gagal Menghapus");

	header("Location: pelanggan_tampil.php");
 ?>