<?php
    $plik="../../Tabor.csv";
    header('Content-Type: application/x-unknown');
    header('Content-Disposition: attachment; filename='$plik'');
    readfile('$plik');
?>