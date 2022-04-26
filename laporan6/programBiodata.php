<!DOCTYPE html>
<html>
<head>
	<center><h1>BIODATA MAHASISWA</h1></center>
</head>
<body>
	<h1></h1>
	<form method="POST" action="postBiodata.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="150">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="150">NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td width="150">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="150">Jenis kelamin</td>
				<td><input type="text" name="gender"></td>
			</tr>
			<tr>
			<tr>
				<tr>
				<td width="150">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<tr>
				<td width="150">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
			<tr>
				<tr>
				<td width="150">Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<tr>
				<td width="150">Jenjang pendidikan</td>
				<td><input type="text" name="jenjang"></td>
			</tr>
		</table>
			<br> <center>
			<input type="submit" name="simpan" value="Simpan">
			<input type="reset" name="reset" value="Reset"></center>
	</form>
</body>
</html>