<?php include_once("koneksi.php"); 

	$nama= $_POST['nama'];
	$jenis= $_POST['jenis'];
	$pendidikan=$_POST['pendidikan'];
	$alamat=$_POST['alamat'];
	$hobi=$_POST['hobi'];

	$query="INSERT INTO pelanggan (nama,jenis,pendidikan,alamat,hobi) VALUES ('$nama','$jenis','$pendidikan','$alamat','$hobi')";

	$hasil=mysqli_query($koneksi,$query);

	if(!$hasil)
		die("Data Tidak Tersimpan");

	header("location: pelanggan_tampil.php");
?>