<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA PELANGGAN</title>
</head>
<body>
	<form action="pelanggan_simpan.php" method="POST">
		<table>
			<tr>
				<td>Nama:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin: </td>
				<td><input type="radio" name="jenis" value="Pria">Pria
					<input type="radio" name="jenis" value="Wanita">Wanita
				</td>
			</tr>
			<tr>
				<td>Pendidikan Terakhir: </td>
				<td>
					<select name="pendidikan">
						<option>SMP</option>
						<option>SMA</option>
						<option>D3</option>
						<option>S1</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Alamat:</td>
				<td><textarea cols="50" rows="5" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Hobi:</td>
				<td><textarea cols="50" rows="5" name="hobi"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"> <input type="reset" name="cancel" value="CANCEL"></td>
			</tr>
		</table>
	</form>
</body>
</html>