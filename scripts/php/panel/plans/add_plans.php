<?php

    require_once("../../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $numer_taborowy = $_POST['numer_taborowy'];
    $rozklad = $_POST['rozklad'];
    $data = $_POST['data'];

    $swap_vehicle = "SELECT * FROM `spis_taboru`
    WHERE `numer_taborowy` = '$numer_taborowy'";

    $swap_timetable = "SELECT * FROM `rozkłady`
    WHERE `nazwa_rozkladu` = '$rozklad'";

    if ($result = @$connect->query($swap_vehicle)) {
        $vehicle = $result->num_rows;
        if ($vehicle > 0) {
            while ($row = $result->fetch_array()) {
                    $id = $row['id'];
            }
        }
    }

    if ($result1 = @$connect->query($swap_timetable)) {
        $timetable = $result1->num_rows;
        if ($timetable > 0) {
            while ($row1 = $result1->fetch_array()) {
                    $id_rozkladu = $row1['id'];
            }
        }
    }

    $add_plan = "INSERT INTO `przydzial`(`id_rozkladu`, `data`, `id_pojazdu`) VALUES ('$id_rozkladu','$data','$id')";

    $add = $connect->query($add_plan);

    header("Location: ../../../../panel.php?page=add_plans&data=".$data);
?>