<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    $query = "SELECT min(`rok_produkcji`) FROM `tabor`";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo 2019 - $row['min(`rok_produkcji`)']." lat(a)";
            }
        }
    }
?>