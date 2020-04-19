<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];
    
    $query_tram = "SELECT * FROM `spis_taboru` WHERE `typ` = 'TRAMWAJ' and `przewoznik`='$przewoznik' ORDER BY `numer_taborowy`";

    if ($result = @$connect->query($query_tram)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                    <td>".$row['numer_taborowy']."</td>
                    <td>".$row['marka']."</td>
                    <td>".$row['model']."</td>
                    <td><a href='panel.php?page=rolling_stone_card&id=".$row['id']."'><i style='text-decoration:none;' class='fas fa-info-circle'></i></a></td>
                </tr>";
            }
        }
    }
?>