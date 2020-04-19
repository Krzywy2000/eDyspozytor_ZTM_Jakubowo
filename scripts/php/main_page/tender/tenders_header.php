<?php
    $id = $_GET['id'];
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $query = "SELECT `temat` FROM przetargi WHERE `id` = ".$id;

    if ($result = @$connect->query($query)) {
        $statements = $result->num_rows;
        if ($statements > 0) {
            while ($row = $result->fetch_array()) {
                echo "<H5>".$row['temat']."</H5>";
            }
        }
    }
?>