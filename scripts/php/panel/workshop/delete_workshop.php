<?php
    require_once("../../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $id = $_POST['id'];
    $delete_workshop = "DELETE FROM `warsztat` WHERE `id` = '$id'";
    $queries = $connect->query($delete_workshop);

    header("Location: ../../../../panel.php?page=workshop");
?>