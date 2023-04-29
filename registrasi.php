<?php
    $psn ="";
    if(isset($_POST["txNAMA"])){
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];
        

        if($pass1==$pass2){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSERNAME"];
            $iduser = md5($email);


            $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser)VALUES('$nama','$email','$user','$pass1','$iduser');";
            include_once("koneksi.php");
            $hsl = mysqli_query($cnn, $sql);
            if($hsl){
                $psn = "User Name Berhasil Ditambahkan";
            }else{
                $psn = "User Name Gagal Ditambahkan";
            }

            
        }else{
            $psn = "password tidak sama dengan konfirmasi password";
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Regristasi</title>
</head>
<body>

<?php
    echo "<div>$psn</div>";
?>

    <form method="POST" action="registrasi.php">

        <div>
            Nama Lengkap
            <input type="text" name="txNAMA">
        </div>
        <div>
            Email
            <input type="email" name="txEMAIL">
        </div>
        <div>
            User Name
            <input type="text" name="txUSERNAME">
        </div>
        <div>
            Password
            <input type="password" name="txPASS1">
        </div>
        <div>
            Password<sup>konfirmasi</sup>
            <input type="password" name="txPASS2">
        </div>

        <div>
            <button type="submit"> Regristasi </button>
        </div>
</form>
    
</body>
</html>