<?php
    require_once("../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $id = $_POST['id'];
    $query = "DELETE FROM `komunikaty` WHERE `id` = '$id'";
    $queries = $connect->query($query);

    header("Location: ../../../admin.php");
?>