<?php

include_once("koneksi.php");

	$kode= $_GET['kode'];

	$query=" SELECT * FROM pelanggan WHERE kode='$kode'";
	$hasil= mysqli_query ($koneksi,$query);

	$data=mysqli_fetch_assoc($hasil);

	$nama= $data['nama'];
	$jenis= $data['jenis'];
	$pendidikan=$data['pendidikan'];
	$alamat=$data['alamat'];
	$hobi=$data['hobi'];



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>UBAH DATA PELANGGAN <?php echo $data['nama']; ?></title>
</head>
<body>
	<form action="save_ubah_data_pelanggan.php" method="POST">
		<input type="hidden" name="kode" value="<?php echo $data['kode']; ?>">
		<table>
			<tr>
				<td>Nama:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin: </td>
				<td><input type="radio" name="jenis" value="Pria" <?php if(strtolower($jenis)=='pria'){?>checked="true" <?php  } ?>>Pria
					<input type="radio" name="jenis" value="Wanita" <?php if(strtolower($jenis)=='wanita'){?>checked="true" <?php  } ?>>Wanita
				</td>
			</tr>
			<tr>
				<td>Pendidikan Terakhir: </td>
				<td>
					<select name="pendidikan">
						<option <?php if(strtolower($pendidikan)=='smp'){?> selected="true" <?php } ?>>SMP</option>
						<option <?php if(strtolower($pendidikan)=='sma'){?> selected="true" <?php } ?>>SMA</option>
						<option <?php if(strtolower($pendidikan)=='d3'){?> selected="true" <?php } ?>>D3</option>
						<option <?php if(strtolower($pendidikan)=='s1'){?> selected="true" <?php } ?>>S1</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Alamat:</td>
				<td><textarea cols="50" rows="5" name="alamat"><?php echo $data['alamat']; ?></textarea></td>
			</tr>
			<tr>
				<td>Hobi:</td>
				<td><textarea cols="50" rows="5" name="hobi"><?php echo $data['hobi']; ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"> <input type="reset" name="cancel" value="CANCEL"></td>
			</tr>
		</table>
	</form>
</body>
</html>