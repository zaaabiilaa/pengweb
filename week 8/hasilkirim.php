<?php
    if(empty($_GET['nama'])) {
        header("Location:kosong.php");
    } elseif (empty($_GET['email'])) {
        header("Location:kosong.php");
    } else {
        echo "Nama : ".$_GET['nama']."<br>";
        echo "Email : ".$_GET['email']."<br>";
        echo "Login : " .date("d-m-Y") .date_default_timezone_set("Asia/Jakarta");
        $jam = date ("H:i:s");
        echo ", " . $jam;
    }
?>