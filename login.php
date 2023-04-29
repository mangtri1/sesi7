<?php
    session_start();

    if(isset($_POST["txUSER"])){
        $user = $_POST["txUser"];
        $pwd = $_POST["txPASS"];
        $sql = "SELECT tu.nama, tu.email, tu.username,tu.passkey, tu.iduser FROM tbuser tu WHERE tu.username='".$user."';";
        include_once("koneksi.php");
        $hsl = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hsl);
        if($jdata > 0){
            $h = mysqli_fetch_assoc($hsl);
            $nama= $h["nama"];
            $ema= $h["email"];
            $uname= $h["username"];
            $pass= $h["passkey"];
            $idusr= $h["iduser"];
            if($pass == $pwd){
                $_SESSION["login"] = $idusr;
                $_SESSION["user"] = $uname;
                $_SESSION["nama"] = $nama;
                $_SESSION["ema"] = $ema;
                header("location: dashboard.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
</head>
<body>

<form method="POST" action="login.php">

    <h3>login</h3>
    
    <div>
        user name
    <input type="text" name="txUser">
</div>

<div>
        password
    <input type="password" name="txPASS">
</div>

<div>
    <button type="submit"> login </button>
    <a href="registrasi.php">registasi User</a>
</div>

</form>
    
</body>
</html>