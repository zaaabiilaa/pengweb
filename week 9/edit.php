<!DOCTYPE html>
<html>
<head>
	<title>PHP dan MySQLi</title>
</head>
<body>
    <a href="nomer3.php">KEMBALI</a>
	<br>
	<h3 align="center">EDIT DATA PEGAWAI</h3>
    <br>
	<?php
	include 'koneksi.php';
	$nip = $_GET['nip'];
	$data = mysqli_query($koneksi,"select * from pegawai where nip='$nip'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table align="center">
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="nip" value="<?php echo $d['nip']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
                <tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>