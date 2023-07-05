<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <div>
            Alas
            <input type="text" id="txALAS" name="txALAS" >           
        </div>
        <br>
        <div>
            TINGGI
            <input type="text" id="txTINGGI" name="txTINGGI">           
        </div>
        <br>
        <div>
            <button type="button" onclick="Hitung()">Hasil</button>
        </div>
        <br>
        <p>
            <div id="hasil"></div>
        </p>
    </form>

    <script>
        function Hitung(){
            let alas = document.getElementById("txALAS").value;
            let tinggi = document.getElementById("txTINGGI").value;
            let luas = alas * tinggi * 1/2
            document.getElementById("hasil").innerHTML = "Luas dari SEGITIGA adalah " + luas
        }
    </script>


</body>
</html>