<?php
    require_once("../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $data = date("Y-m-d");
    $naglowek = $_POST['title'];
    $tresc = $_POST['content'];
    $tresc_skrocona = $_POST['content_short'];
    $tryb = $_POST['tryb'];

    $query = "INSERT INTO `wiadomosci`(`naglowek`, `data_dodania`, `tresc_skrocona`, `tresc`,`tryb`) VALUES ('$naglowek','$data','$tresc_skrocona','$tresc','$tryb')";
    $queries = $connect->query($query);

    header("Location: ../../../admin.php?page=add_news");
?>