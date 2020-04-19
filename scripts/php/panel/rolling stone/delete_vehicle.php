<?php
    require_once("../../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $id = $_POST['id'];
    $delete_vehicle = "DELETE FROM `spis_taboru` WHERE `id` = '$id'";
    $delete_workshop = "DELETE FROM `warsztat` WHERE `id_pojazdu` = '$id'";
    $queries = $connect->query($delete_vehicle);
    $queries1 = $connect->query($delete_workshop);

    header("Location: ../../../../panel.php?page=rolling_stone");
?>