<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    
    <div id="tampilkan"></div>

    <script>
        let target = "https://webpro.ptov.my.id/api/curduser.php?aksi=get"

        const bacadta = new XMLHttpRequest();

        bacadta.open("GET", target);
        bacadta.send();

        bacadta.onload = function(){
            const jdta = JSON.parse(this.responseText);

            console.log(jdta);

            let tx = '<table><tr><td>#</td><td>Nama Lengkap</td><td>Email</td><td>Username</td><td><a href="latih01-new.html">Tambah</a></td></tr>';
            let no = 1;
            for(let cx=0; cx<jdta.isi.length; cx++){
                tx += "<tr>";
                tx += "<td>"+no+"</td>";
                tx += "<td>"+jdta.isi[cx][0]+"</td>";
                tx += "<td>"+jdta.isi[cx][1]+"</td>";
                tx += "<td>"+jdta.isi[cx][2]+"</td>";
                tx += "<td>";
                tx += '<a href="latih01-edit.html?id='+jdta.isi[cx][3]+'">Ubah</a>';
                tx += '<a href="latih01-del.html?id='+jdta.isi[cx][3]+'">Hapus</a>';
                tx += "</td>";
                tx += "</tr>";
                no++;

            }
            tx += "</table>";

            document.getElementById("tampilkan").innerHTML = tx;
        }



    </script>

</body>
</html>