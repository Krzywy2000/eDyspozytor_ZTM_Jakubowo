<?php
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $limit = $month - 1;
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $id = $_GET['id'];
    
    $query = "SELECT * FROM `warsztat` WHERE `id_pojazdu`=$id and `data_koncowa` >= '".$year."-".$limit."-".$day."'";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                    
                echo "<tr>
                <td><b>Od: </b>".$row['data_poczatkowa']."<br/><b>Do: </b>".$row['data_koncowa']."</td>
                <td>".$row['powod']."</td>
                </tr>";
            }
        }
        else {
            echo "<tr>
            <td colspan='2'>Brak wizyt w warsztacie</td>
            </tr>";
        }
    }
?>