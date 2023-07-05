<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Perulangan For<p> for(nAwal;range;counter){<br>area Perulangan<br>} </p>
    </div>

    <script>
        for(let i=1; i<10 + 1; i++){
            document.write("<br>Perulangan ke-" + i);
        }
    </script>

    <div>
        Perulangan while<p>while(logika){<br>area pengulangan<br>}</P>
    </div>
    <script>
        let nAwal = 0;
        var nAkhir = 10;

        while(nAwal < nAkhir){
            document.write("<br>Perulangan ke-" + nAwal);
            nAwal++;
        }
    </script>
</body>
</html>