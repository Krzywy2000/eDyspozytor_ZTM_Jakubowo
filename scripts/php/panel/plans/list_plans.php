<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];
    $data = date('Y-m-d');

    $query_plans = "SELECT `data`,`numer_taborowy`,`nazwa_rozkladu`,`godzina_rozpoczecia`,`godzina_zakonczenia`,`spis_taboru`.`typ_taboru` as pojazd, `rozkłady`.`przewoznik` FROM `archiwum`
    INNER JOIN `spis_taboru` on `spis_taboru`.`id` = `archiwum`.`id_pojazdu`
    INNER JOIN `rozkłady` on `rozkłady`.`id` = `archiwum`.`id_rozkladu`
    WHERE `rozkłady`.`przewoznik`='$przewoznik' and `data`>='$data'";

  
    $query_current_plans = "SELECT `data`,`numer_taborowy`,`nazwa_rozkladu`,`godzina_rozpoczecia`,`godzina_zakonczenia`,`spis_taboru`.`typ_taboru` as pojazd, `rozkłady`.`przewoznik` FROM `przydzial`
    INNER JOIN `spis_taboru` on `spis_taboru`.`id` = `przydzial`.`id_pojazdu`
    INNER JOIN `rozkłady` on `rozkłady`.`id` = `przydzial`.`id_rozkladu`
    WHERE `rozkłady`.`przewoznik`='$przewoznik' and `data`>='$data'";
  
    if ($result = @$connect->query($query_plans)) {
        $plans = $result->num_rows;
        if ($plans > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                    <td>".$row['data']."</td>
                    <td>".$row['nazwa_rozkladu']."</td>
                    <td>".$row['numer_taborowy']."</td>
                    <td>".$row['godzina_rozpoczecia']." - ".$row['godzina_zakonczenia']."</td>
                    <td>".$row['pojazd']."</td>
                </tr>";
            }
        }
    }
  
  if ($result1 = @$connect->query($query_current_plans)) {
        $plans1 = $result1->num_rows;
        if ($plans1 > 0) {
            while ($row1 = $result1->fetch_array()) {
                echo "<tr>
                    <td>".$row1['data']."</td>
                    <td>".$row1['nazwa_rozkladu']."</td>
                    <td>".$row1['numer_taborowy']."</td>
                    <td>".$row1['godzina_rozpoczecia']." - ".$row1['godzina_zakonczenia']."</td>
                    <td>".$row1['pojazd']."</td>
                </tr>";
            }
        }
    }
?>