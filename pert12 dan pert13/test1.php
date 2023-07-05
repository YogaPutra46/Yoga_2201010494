<?php
    $data["NIM"] = "2201010467";
    $data["NAMA"] = "Ananta Wijaya";
    $data["JkEL"] = "L";
    $data["jRSN"] = "TI-MTI";
    $data["kLS"] = "M";
    $data["tGLHRN"] = "2004-02-05";

    header("content-type: application/json; charset: utf-8");
    echo json_encode($data);
?>