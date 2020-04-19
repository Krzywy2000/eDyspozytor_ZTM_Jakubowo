<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];

    $query_plans = "SELECT * from `rozkłady`
    WHERE `przewoznik`='$przewoznik'";

    if ($result = @$connect->query($query_plans)) {
        $plans = $result->num_rows;
        if ($plans > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                    <td>".$row['nazwa_rozkladu']."</td>
                    <td>".$row['godzina_rozpoczecia']." - ".$row['godzina_zakonczenia']."</td>
                    <td>".$row['typ_taboru']."</td>
                </tr>";
            }
        }
    }
?>