<?php 
include 'koneksi.php';
$nip = $_GET['nip'];
mysqli_query($koneksi,"delete from pegawai where nip='$nip'");
header("location:nomer3.php");
?>