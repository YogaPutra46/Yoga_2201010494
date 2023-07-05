<?php
    $dta [0]["NAMA"] ="I Made Dwipayana Hendrawan";
    $dta [0]["NIM"]= "2201010152";
    $dta [0]["JENISKELAMIN"] ="Perempuan";
    $dta [0]["ALAMAT"]= "Nusa Dua, Badung, Bali, Indonesia";
    $dta [0]["HOBI"]= "Balap Liar";
    $dta [0]["TGLLAHIR"]= "2003-12-21";
    $dta [0]["UNIV"]="Universitas Gadjah Mada";
    $dta [0]["JURUSAN"]="Teknik Nuklir";
   
    $dta [1]["NAMA"] ="I Made Ananta Wijaya";
    $dta [1]["NIM"]= "2201010467";
    $dta [1]["JENISKELAMIN"] ="Laki-laki";
    $dta [1]["ALAMAT"]= "Kerobokan, Badung, Bali, Indonesia";
    $dta [1]["HOBI"]= "Melali";
    $dta [1]["TGLLAHIR"]= "2004-02-05";
    $dta [1]["UNIV"]="Universitas Indonesia";
    $dta [1]["JURUSAN"]="Teknik Nuklir";
    
    $dta [2]["NAMA"] ="I Made Putra Sedana";
    $dta [2]["NIM"]= "2201010110";
    $dta [2]["JENISKELAMIN"] ="Laki-laki";
    $dta [2]["ALAMAT"]= "Kerambitan, Tabanan, Bali, Indonesia";
    $dta [2]["HOBI"]= "Balap";
    $dta [2]["TGLLAHIR"]= "2003-05-05";
    $dta [2]["UNIV"]="Universitas Airlangga";
    $dta [2]["JURUSAN"]="Teknik Nuklir";

    $dta [3]["NAMA"] ="I Made Dharma Putra";
    $dta [3]["NIM"]= "2201010423";
    $dta [3]["JENISKELAMIN"] ="Laki-laki";
    $dta [3]["ALAMAT"]= "Pemogan, Denpasar, Bali, Indonesia";
    $dta [3]["HOBI"]= "Joged";
    $dta [3]["TGLLAHIR"]= "2004-02-05";
    $dta [3]["UNIV"]="Universitas Indonesia";
    $dta [3]["JURUSAN"]="Teknik Nuklir";

    $dta [4]["NAMA"] ="I Made Kevin Pratama";
    $dta [4]["NIM"]= "2201010435";
    $dta [4]["JENISKELAMIN"] ="Laki-laki";
    $dta [4]["ALAMAT"]= "Abian Timbul, Denpasar, Bali, Indonesia";
    $dta [4]["HOBI"]= "Gambel";
    $dta [4]["TGLLAHIR"]= "2004-02-05";
    $dta [4]["UNIV"]="Universitas Udayana";
    $dta [4]["JURUSAN"]="Teknik Lukis";
    header("Content-type: application/json; charset: utf-8");
    echo json_encode($dta);
?>
