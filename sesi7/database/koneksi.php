<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or  die("Koneksi ke DBMS Mysql Gagal");
    // if($cnn){
    //     echo "Koneksi Sukses";
    // }else{
    //     echo "invalid";
    // }
    // mysqli_close($cnn);