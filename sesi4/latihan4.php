<?php

    $filez = "";
    $path = "upGAMBAR/";
    if(isset($_POST["upfilex"])){
        $filez = $path . basename($_FILES["upGAMBAR"]["name"]);
        move_uploaded_file($_FILES["upGAMBAR"]["tmp_name"], $filez);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload File</title>
</head>
<body>
    
    <form action="latihan4.php" method="post" enctype="multipart/form-data">

    <div>
        Upload Gambar
        <input type="file" name="upGAMBAR">
    </div>

    <div>
        <button type="submit">Upload File</button>
    </div>

    <input type="hidden" name="upfilex" value="ok">

    </form>

    <div>
        <?="<img src='$filez' width='200px'>";?>
    </div>

</body>
</html>