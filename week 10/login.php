<?php
session_start();
include "koneksi.php"
?>
<html>

<head>
    <title>Halaman Login Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body>
    <h2 align="center">Login</h2>
    <form method="post">
    <div class="form-outline mb-4">
        <input type="text" id="form2Example1" class="form-control" name="fusername"/>
        <label class="form-label" for="form2Example1">Username</label>
    </div>

    <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="fpassword"/>
        <label class="form-label" for="form2Example2">Password</label>
    </div>

    <button name="fmasuk" type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
        
    </form>
    <?php
    if (isset($_POST['fmasuk'])) {
        $username = $_POST['fusername'];
        $password = $_POST['fpassword'];
        $qry = mysqli_query($koneksi, "SELECT * FROM masuk WHERE username = '$username' AND passwor = ('$password')");
        $cek = mysqli_num_rows($qry);
        if ($cek == 1) {
            $_SESSION['userweb'] = $username;
            header("location:formpendaftaran.php");
            exit;
        } else {
            echo "Maaf username atau password salah";
        }
    }
    ?>
</body>

</html>

