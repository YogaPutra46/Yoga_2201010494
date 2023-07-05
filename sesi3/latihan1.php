<?php

    $cars = array("Honda", "Suzuki", "Toyota", "Yamaha");

    $jmlhdata = count($cars);
    echo "Jumlah Data: ". $jmlhdata. "<br>";
    for ($i=0;$i<$jmlhdata;$i++){

        echo "<br>Kendaran ". $cars[$i];
    }

echo "<hr>";

echo "<ol>";
foreach($cars as $d){
    echo "<li>Kendaraan ". $d. "</li>";
}
echo "</ol>";
