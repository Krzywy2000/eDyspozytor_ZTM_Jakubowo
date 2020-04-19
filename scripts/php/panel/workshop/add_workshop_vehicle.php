<?php
    session_start();
    require_once("../../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    
    $id = $_POST['id'];
    $data_poczatkowa = $_POST['data_poczatek'];
    $data_koncowa = $_POST['data_koniec'];
    $powod = $_POST['powod'];


    $query_add = "INSERT INTO `warsztat`(`id_pojazdu`, `data_poczatkowa`, `data_koncowa`, `powod`) VALUES ('$id','$data_poczatkowa','$data_koncowa','$powod')";

    $add_workshop = $connect->query($query_add);
    header("Location: ../../../../panel.php?page=rolling_stone_card&id=$id");
?>