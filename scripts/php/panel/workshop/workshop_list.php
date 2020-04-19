<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];

    $query_workshop = "SELECT warsztat.id as warsztatid,`spis_taboru`.`id`,numer_taborowy,powod,data_poczatkowa,data_koncowa,typ FROM `warsztat`
    left join `spis_taboru` on `warsztat`.`id_pojazdu` = `spis_taboru`.`id`
    WHERE `przewoznik`='$przewoznik' and `typ`='AUTOBUS'";

    if ($result = @$connect->query($query_workshop)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                    <td>".$row['data_poczatkowa']." - ".$row['data_koncowa']."</td>
                    <td>".$row['numer_taborowy']."</td>
                    <td>".$row['powod']."</td>
                    <td><a href='panel.php?page=rolling_stone_card&id=".$row['id']."'><i style='text-decoration:none;' class='fas fa-info-circle'></i></a></td>
                    <td><a href='panel.php?page=delete_workshop&id=".$row['warsztatid']."'>Usuń</a></td>
                </tr>";
            }
        }
    }
?>