<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM" id="NIM">
        </div>
        <div>
            NAMA
            <input type="text" name="txNAMA" id="NAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" name="txJK" id="JK" value="Laki - Laki"> Laki - Laki
            <input type="radio" name="txJK" id="JK" value="Perempuan"> Perempuan
        </div>
        <div>
            JURURSAN
            <select name="txJURUSAN" id="JURURSAN">
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
            </select>
        </div>
        <div>
            HOBI
            <input type="checkbox" name="txHOBI_TIDUR" value="TIDUR">TIDUR
            <input type="checkbox" name="txHOBI_MAKAN" value="MAKAN">MAKAN
            <input type="checkbox" name="txHOBI_MINUM" value="MINUM">MINUM
            <input type="checkbox" name="txHOBI_GAME" value="GAME">GAME
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script>
        function checkform(frm) {
            let F = frm.elements;
            let nim = F.namedItem("txNIM").value;
            let nama = F.namedItem("txNAMA").value;
            let jk = F.namedItem("txJK").value;
            let jurusan = F.namedItem("txJURUSAN").value;
            let hobi = [
                F.namedItem("txHOBI_TIDUR").checked, 
                F.namedItem("txHOBI_MAKAN").checked,
                F.namedItem("txHOBI_MINUM").checked,
                F.namedItem("txHOBI_GAME").checked
            ]

            console.log("NIM: " + nim)
            console.log("NAMA: " + nama)
            console.log("JENIS KELAMIN: " + jk)
            console.log("JURUSAN: " + jurusan)
            console.log("HOBI: " + hobi)


            return false;
        }
    </script>

</body>

</html>