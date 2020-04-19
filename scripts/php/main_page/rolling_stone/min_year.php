<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    $query = "SELECT max(`rok_produkcji`) FROM `tabor`";
    $date = date("Y");

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo $date - $row['max(`rok_produkcji`)']." lat(a)";
            }
        }
    }
?>