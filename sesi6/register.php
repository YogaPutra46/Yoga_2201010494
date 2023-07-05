<?php
    include("cmd/user.php");
    $psn = "";
    if(isset($_POST["pass1"])){
        if($_POST["pass1"] == $_POST["pass2"]){
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $user = $_POST["user"];
            $pass = $_POST["pass1"];

            if (createuser($nama, $email, $user, $pass) ){
                $psn = "Create Data User Sukses";
            }else{
                $psn = "Create Data User Gagal";
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
    <title>Registrasi User</title>
</head>
<body>
    
    <form action="register.php" method="post">

        <h1>REGISTRASI</h1> 
           
        <?php
            echo "<div> $psn </div>";
        ?>
        <div class="">
            Nama Lengkap
            <input type="text" name="nama" placeholder="Masukan nama lengkap">
        </div>    
        <div class="">
            Email
            <input type="email" name="email" placeholder="Masukan email">
        </div>    
        <div class="">
            User
            <input type="text" name="user" placeholder="Masukan user">
        </div>    
        <div class="">
            Password
            <input type="password" name="pass1" placeholder="Masukan password">
        </div>    
        <div class="">
            Verifikasi password
            <input type="password" name="pass2" placeholder="Verifikasi password">
        </div>    

        <div class="">
            <button type="submit">Register</button>
        </div>
    </form>

</body>
</html>