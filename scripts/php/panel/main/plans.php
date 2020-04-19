<?php
    $query="SELECT * FROM workshop";

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];
    $data = date('Y-m-d');

    $query = "SELECT * FROM `przydzial`
    INNER JOIN `spis_taboru` on `spis_taboru`.`id` = `przydzial`.`id_pojazdu`
    INNER JOIN `rozkłady` on `rozkłady`.`id` = `przydzial`.`id_rozkladu`
    WHERE `spis_taboru`.`przewoznik`='$przewoznik' and `data`='$data'
    Order by `numer_taborowy`";
  
    $query_archive = "SELECT * FROM `archiwum`
    INNER JOIN `spis_taboru` on `spis_taboru`.`id` = `archiwum`.`id_pojazdu`
    INNER JOIN `rozkłady` on `rozkłady`.`id` = `archiwum`.`id_rozkladu`
    WHERE `spis_taboru`.`przewoznik`='$przewoznik' and `data`='$data'
    Order by `numer_taborowy`";


    if ($result = @$connect->query($query)) {
        $workshop = $result->num_rows;
        if ($workshop > 0) {
            echo "<tr class='table__main overflow-auto'>
                <th>Numer taborowy</th>
                <th>Rozkład</th>
                <th>Godziny</th>
                </tr>";
            while ($row = $result->fetch_array()) {
                echo "<tr class='table__main overflow-auto'>
                <td><a><b>".$row['numer_taborowy']."</b></a></td>
                <td>".$row['nazwa_rozkladu']."</td>
                <td>".$row['godzina_rozpoczecia']." - ".$row['godzina_zakonczenia']."</td>
                </tr>";
            }
        }
    }
  
    if ($result1 = @$connect->query($query_archive)) {
        $workshop1 = $result1->num_rows;
        if ($workshop1 > 0) {
            echo "<tr class='table__main overflow-auto'>
                <th>Numer taborowy</th>
                <th>Rozkład</th>
                <th>Godziny</th>
                </tr>";
            while ($row1 = $result1->fetch_array()) {
                echo "<tr class='table__main overflow-auto'>
                <td><a><b>".$row1['numer_taborowy']."</b></a></td>
                <td>".$row1['nazwa_rozkladu']."</td>
                <td>".$row1['godzina_rozpoczecia']." - ".$row1['godzina_zakonczenia']."</td>
                </tr>";
            }
        }
    }
    else{
        echo "<tr class='table__main'>
        <td><a>Brak pojazdów na planach</a></td>
        </tr>";
    }

?>