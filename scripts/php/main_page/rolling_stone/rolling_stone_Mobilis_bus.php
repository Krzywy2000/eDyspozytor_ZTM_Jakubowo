<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    
    $query = "SELECT * FROM `tabor` WHERE `typ_pojazdu` = 'BUS' and `przewoznik` = 'MOBILIS'";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                    <td>".$row['marka']."</td>
                    <td>".$row['model']."</td>
                    <td>".$row['rok_produkcji']."</td>
                    <td>".$row['ekploatacja']."</td>
                    <td>".$row['numery taborowe']."</td>
                    <td>".$row['ilosc_sztuk']."</td>
                    <td>".$row['zajezdnia']."</td>
                    <td>".$row['uwagi']."</td>
                </tr>
                <tr>";
                if($row['rysunek'] == "<i>W przygotowaniu</i>")
                {
                    echo "<td colspan='8'>".$row['rysunek']."</td>";
                }
                else
                {
                    echo "<td colspan='8'><img src='images/rolling_stone/Buses/".$row['rysunek'].".png'/></td>";
                }
                echo "</tr>";
            }
        }
    }
?>