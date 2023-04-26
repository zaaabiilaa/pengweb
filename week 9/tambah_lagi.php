<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"insert into pegawai values('','$nama','$jk','$email','$alamat')");
header("location:nomer3.php");
?>