<?php

    $usr = "";
    $ps = "";
    $eusr ="";
    $eps ="";
    if (isset($_POST["txUSER"])) {
        $usr = $_POST["txUSER"];
        $ps = $_POST["txPASSKY"];

        if($usr == ""){
            $eusr = "<div style='color: red; font-size: 10px;'>WOE jangan di kosongin username goblok</div>";
        }
        if($ps == ""){
            $eps = "<div style='color: red; font-size: 10px;'>WOE jangan di kosongin password goblok</div>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method POST</title>
</head>

<body>

    <form action="latihan2.php" method="POST">

        <div>
            User name
            <input type="text" name="txUSER">
            <?=$eusr;?>
        </div>

        <div>
            Password
            <input type="password" name="txPASSKY" >
            <?=$eps;?>
        </div>

        <div>
            <button>Login</button>
        </div>
    </form>

    <div>
        Isi dari form:<br>
            1. User Name:<?=$usr?><br>
            2. Password:<?=$ps?>
    </div>

</body>

</html>