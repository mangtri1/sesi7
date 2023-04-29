<?php
    include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
  
   if($cnn){

    $sql = "CREATE DATABASE " . DBNAME;
   $hasil = mysqli_query($cnn, $sql);
   if($hasil){
    echo "pembuatan database" . DBNAME . "sukses";
   }else{
    echo "pembuatan database" . DBNAME . "gagal";
   }


}else{
    echo "koneksi ke mysql gagal";
   }