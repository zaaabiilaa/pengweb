<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = mysqli_connect($severname, $username, $password, $dbname);
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Eng', 'English', '3')";


if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else {
    echo "Error creating database: ".mysqli_error($conn);
}

mysqli_close($conn);
?>