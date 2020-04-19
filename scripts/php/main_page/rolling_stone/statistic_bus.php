<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    $query = "SELECT sum(ilosc_sztuk) FROM `tabor` WHERE `typ_pojazdu` = 'BUS'";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo "- ".$row['sum(ilosc_sztuk)'];
            }
        }
    }
?>