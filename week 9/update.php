<?php 
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"update pegawai set nama='$nama', jenis_kelamin='$jk', email='$email', alamat='$alamat' where nip='$nip'");
header("location:nomer3.php"); 
?>