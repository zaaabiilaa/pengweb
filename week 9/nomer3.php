<!DOCTYPE html>
<html>
<head>
	<title>PHP dan MySQLi</title>
</head>
<body>
	<h2 align="center"> DATA PEGAWAI </h2>
	<br/>
	<br/>
	<table border="1" align="center">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
            <th>Email</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['email']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?nip=<?php echo $d['nip']; ?>">EDIT</a>
					<a href="delete.php?nip=<?php echo $d['nip']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <a href="tambah.php">TAMBAH PEGAWAI</a>
</body>
</html>