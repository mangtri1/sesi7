<?php
    include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
  
   if($cnn){
    $tbel = "tbUSER";
    $sql = "CREATE TABLE  $tbel(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(30) NOT NULL,
        email VARCHAR(255) NOT NULL,
        username VARCHAR(20),
        passkey VARCHAR(255),
        iduser varchar(255)

    )";
    $hasil = mysqli_query($cnn, $sql);
   if($hasil){
    echo "pembuatan tabel" . $tbel . "sukses";
   }else{
    echo "pembuatan tabel" . $tbel . "gagal";
   }


}else{
    echo "koneksi ke mysql gagal";
   }