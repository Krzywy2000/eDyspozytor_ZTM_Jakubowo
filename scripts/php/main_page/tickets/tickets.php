<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    $query = "SELECT * FROM `taryfa` WHERE `rodzaj` = 'Ulgowy'";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                <td>".$row['nazwa']."</td>
                <td>".$row['cena']."</td>
                <td>".$row['waznosc']."</td>
                <td>".$row['strefa']."</td>
                </tr>";
            }
        }
    }
?>