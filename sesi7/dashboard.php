<?php
session_start();

if(isset($_SESSION["login"])){
    if(!$_SESSION["login"] == ""){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
</head>
<body>
        DataMahasiswa DataMataKuliah DataDosen DataUser <a href="?act=logout">Logout</a>
</body>
</html>
<?php
    }else{
        header("location: login.php");
    }
}else{
    header("location: login.php");
}

?>