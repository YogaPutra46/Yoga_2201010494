<?php

$siswa = array(
    array("NAMA" => "Upin", "ID" => "1234", "KOTA" => "Durian Runtuh"),
    array("NAMA" => "Mei Mei", "ID" => "5678", "KOTA" => "Beijing"),
    array("NAMA" => "Jarjit", "ID" => "9012", "KOTA" => "Dubai"),
    array("NAMA" => "Susantai", "ID" => "3456", "KOTA" => "Jakarta"),
);

// echo $siswa[0]["NAMA"];
// echo "<hr>";

// print_r($siswa);
// echo "<hr>";

// foreach ($siswa as $data) {

//     foreach ($data as $lb => $nval) {

//         echo $lb . " : " . $nval . "<br>";
//     }

//     echo "<hr>";
// }

header("Content-type: application/json");
echo json_encode($siswa);