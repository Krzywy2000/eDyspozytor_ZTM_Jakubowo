<?php
    require_once("../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $data_pocz = $_POST['start_date'];
    $data_koncz = $_POST['end_date'];
    $tytul = $_POST['title'];
    $tresc = $_POST['content'];
    $linie = $_POST['lines'];
    $tryb = $_POST['tryb'];

    $query = "INSERT INTO `komunikaty`(`data_poczatek`, `data_koniec`, `temat`, `tresc`, `numery linii`,`tryb`) VALUES ('$data_pocz','$data_koncz','$tytul','$tresc','$linie','$tryb')";
    $queries = $connect->query($query);

    header("Location: ../../../admin.php?page=add_statements");
?>