<?php
$nvar = "P1";
if(isset($_GET["pg"])){
    $nvar = $_GET["pg"];

}

switch ($nvar) {
    case "P1":
        $judulpage = "Halaman 1";
        $konten = "<h3>1. Tentukan Role terbaik kalian</h3><ul><p>Kenali gaya permainan dari diri sendiri, merupakan hal terpentinng dalam permainan strategi ini.</p>";
        break;
    case "P2":
        $judulpage = "Halaman 2";
        $konten = "<h3>2. Asah skil dalam mode Classic.</h3><ul><p>Sebelum kalian melakukan push rank, sangat disarankan untuk melakukan spam hero di mode Classic. Sampai  kalian benar-benar menguasai 5 hero dan 3 role dalam game ini.</p>";
        break;
    case "P3":
        $judulpage = "Halaman 3";
        $konten = "<h3>3. Perhatikan update hero secara berkala.</h3><ul><p>Selalu aktif memperhatikan pembaharuan buff & nerf hero pada setiap patch, hal ini akan sangat membantu dalam pemilihan hero saat melakukan push rank.</p>";
        break;
    case "P4":
        $judulpage = "Halaman 4";
        $konten = "<h3>4. Hindari bermain solo dalam mode Ranked Match.</h3><ul><p>Jika kalian tidak menguasai role hero Jungler, Marksman, Assasin sangat tidak disarankan untuk bermain solo. Karena dalam mode ranked match rawan terhadap pemain yang bermain nge-troll.</p>";
        break;
    default:
    $judulpage = "Halaman 1";
    $konten = "<h3>1. Tentukan Role terbaik kalian</h3><ul><p>Kenali gaya permainan dari diri sendiri, merupakan hal terpentinng dalam permainan strategi ini.</p>";
        break;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judulpage; ?></title>
</head>

<body>

    <a href="latihan03.php?pg=P1">Page1</a>
    <a href="latihan03.php?pg=P2">Page2</a>
    <a href="latihan03.php?pg=P3">Page3</a>
    <a href="latihan03.php?pg=P4">page4</a>

    <?php
    echo $konten;
    ?>
</body>
</html>