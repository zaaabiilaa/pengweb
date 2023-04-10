<html>
<head>
<title> Variabel </title>
</head>
<body>
    <?php
    include "inc.php";
    echo $angka;
    echo "<br>";
    if($angka==100){
        echo "Memuaskan";
    } elseif ($angka<100&&$angka>=85){
        echo "Sangat baik";
    } elseif ($angka<75&&$angka>=70){
        echo "Baik";
    } elseif ($angka<55&&$angka>=0){
        echo "Kurang";
    }
    ?>
</body>
</html>