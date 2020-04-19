<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    $query = "SELECT round(avg(rok_produkcji),0) FROM `tabor`";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo 2019 - $row['round(avg(rok_produkcji),0)']." lat(a)";
            }
        }
    }
?>