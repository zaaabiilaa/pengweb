<!DOCTYPE html>
<html>
<body>

<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = mysqli_connect($severname, $username, $password, $dbname);
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "Kode: ".$row["kode"]." - Negara: ".$row["negara"]." ".$row["champion"]."<br>";
    }
} else {
    echo "0 result";
}

mysqli_close($conn);
?>

</body>
</html>