<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="javascript01.js"></script>

    <div id="pesan">pesan singkat</div>

    <script>
        document.write("Menulis dengan JavaScript");
        document.getElementById("pesan").innerHTML = "Mengganti tulisan"
        document.getElementById("pesan").style.color = "#00FFFF"
    </script>
</body>
</html>