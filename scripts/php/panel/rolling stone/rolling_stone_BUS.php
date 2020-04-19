<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];
    
    $query_bus = "SELECT * FROM `spis_taboru` WHERE `typ` = 'AUTOBUS' and `przewoznik`='$przewoznik' ORDER BY `numer_taborowy`";

    if ($result = @$connect->query($query_bus)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                    <td>".$row['numer_taborowy']."</td>
                    <td>".$row['marka']."</td>
                    <td>".$row['model']."</td>
                    <td>".$row['typ_taboru']."</td>
                    <td><a href='panel.php?page=rolling_stone_card&id=".$row['id']."'><i style='text-decoration:none;' class='fas fa-info-circle'></i></a></td>
                </tr>";
            }
        }
    }
?>