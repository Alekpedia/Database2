<?php include_once("koneksi.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
</head>
<body>
<table border="1">
	<thead>
		<th>NAMA</th><th>JENIS</th><th>PENDIDIKAN</th><th>ALAMAT</th><th>HOBI</th>
	</thead>
	<tbody>
		<?php 

		$query="SELECT * FROM pelanggan";
		$hasil=mysqli_query($koneksi,$query);

		if (!$hasil)
			die("Permintaan Gagal");

		while($data= mysqli_fetch_assoc($hasil)){

		 ?>

		 <tr>
		 	<td><a href="pelanggan_ubah_form.php?kode=<?php echo $data['kode']; ?>">
		 		<?php echo $data['nama']; ?>
		 	</a></td>
		 	<td><?php echo $data['jenis']; ?></td>
		 	<td><?php echo $data['pendidikan']; ?></td>
		 	<td><?php echo $data['alamat']; ?></td>
		 	<td><?php echo $data['hobi']; ?></td>
		 	<td><a href="hapus.php?kode=<?php echo $data['kode']; ?>">Hapus</a></td>
		 </tr>

		 <?php 

		}?>
	</tbody>
</table>
</body>
</html>