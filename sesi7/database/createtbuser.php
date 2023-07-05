<?php
    include("koneksi.php");

    $tble = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";
    
    $hsl = mysqli_query($cnn , $tble);
    if($hsl){
        echo "Table tbUSER ==> sukses";
    }