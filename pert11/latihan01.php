<?php
    $dta ["NAMA"] ="I Made Dwipayana Hendrawan";
    $dta ["NIM"]= "2201010152";
    $dta ["JENISKELAMIN"] ="Perempuan";
    $dta ["ALAMAT"]= "Nusa Dua, Badung, Bali, Indonesia";
    $dta ["HOBI"]= "Balap Liar";
    $dta ["TGLLAHIR"]= "2003-12-21";
    $dta ["UNIV"]="Universitas Gadjah Mada";
    $dta ["JURUSAN"]="Teknik Nuklir";
    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);
?>
