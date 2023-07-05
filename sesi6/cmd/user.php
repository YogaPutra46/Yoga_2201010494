<?php
    include("database/koneksi.php");

    function createuser($nama, $email, $user, $pass){
        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser) 
        VALUES(
            '$nama', 
            '$email', 
            '$user', 
            '$passkey', 
            '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or  die("Koneksi ke DBMS Mysql Gagal");    
        $stt = mysqli_query($cnn, $sql);
        return $stt;

    }