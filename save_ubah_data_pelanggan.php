<?php include_once("koneksi.php");

	$kode= $_POST['kode'];
	$nama= $_POST['nama'];
	$jenis= $_POST['jenis'];
	$pendidikan=$_POST['pendidikan'];
	$alamat=$_POST['alamat'];
	$hobi=$_POST['hobi'];

	$query="UPDATE pelanggan SET nama='$nama',jenis='$jenis',pendidikan='$pendidikan',alamat='$alamat',hobi='$hobi' WHERE kode='$kode'";
	$hasil= mysqli_query($koneksi,$query);

	if(!$hasil)
		die("Gagal Merubah Data");

	header("Location: pelanggan_tampil.php");
 ?>