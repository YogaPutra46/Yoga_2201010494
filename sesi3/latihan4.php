<?php

    function TentangAplikasi(){
        echo "<h3>Aplikasi Apa Saja</h3>";
        echo "<sup>versi 1.0</sup>";
    }

    function cetaklabel1($tx){
        echo "Isi Label: ".$tx;
    }

    function cetaklabel2($tx="isikan table"){
        echo "Isi Label: ".$tx;
    }

    function jumlahkan($ank1=0, $ank2=0){
        return $ank1 + $ank2;
    }
