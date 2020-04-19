<?php
    require_once("../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $data = date("Y-m-d");
    $temat = $_POST['title'];
    $tresc = $_POST['content'];

    $query = "INSERT INTO `przetargi`(`temat`,`tresc`,`data`) VALUES ('$temat','$tresc','$data')";
    $queries = $connect->query($query);

    header("Location: ../../../admin.php?page=add_tenders");
?>