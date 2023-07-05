<?php
    $age = array("Lembu"=>"34", "Lancelot"=>"20", "Alucard"=>"25");

    echo "Umur dari Lembu ".$age["Lembu"], " tahun<br>";

    echo "<hr>";

    echo "<ol>";

    foreach($age as $nama => $umur){
        echo "<li>Umur dari ". $nama. ": ". $umur. "</li>";
    }
    echo "</ol>";

    