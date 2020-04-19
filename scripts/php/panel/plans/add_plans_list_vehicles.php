<?php
    if(isset($_POST['data']))
    {
        $data = $_POST['data'];
    }
    else
    {
        $data = $_GET['data'];
    }
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];
    $day = date('w',strtotime($data));
  
    $archive = "insert into archiwum (`id`,`id_rozkladu`,`data`,`id_pojazdu`) select `id`,`id_rozkladu`,`data`,`id_pojazdu` from `przydzial` WHERE `data` < '$data'";
    $delete = "DELETE FROM `przydzial` WHERE `data` < '$data'";
    $move = $connect->query($archive);
    $del = $connect->query($delete);
    
    $query = "SELECT DISTINCT(`numer_taborowy`),`typ_taboru`,`warsztat`.`id`,`warsztat`.`id_pojazdu`,`warsztat`.`data_poczatkowa`,`warsztat`.`data_koncowa`,`warsztat`.`powod` FROM `spis_taboru`
    LEFT JOIN `przydzial` on `przydzial`.`id_pojazdu` = `spis_taboru`.`id`
    LEFT JOIN `warsztat` on `spis_taboru`.`id` = `warsztat`.`id_pojazdu`
    WHERE `przydzial`.`id` is NULL  and `przewoznik` = '$przewoznik'
    or `przydzial`.`data` not like '$data' and `przewoznik` = '$przewoznik'
    HAVING `warsztat`.`id_pojazdu` is NULL or `warsztat`.`data_poczatkowa` > '$data' or `warsztat`.`data_koncowa` < '$data'
    order by `numer_taborowy`";

    if($day == '6' || $day == '0')
      {
        $query1 = "SELECT * FROM `rozkłady`
    WHERE `typ_rozkladu` = 'DŚ' and `nazwa_rozkladu` not in (SELECT `nazwa_rozkladu` from `rozkłady` LEFT JOIN `przydzial` on `rozkłady`.`id` = `przydzial`.`id_rozkladu` WHERE `przydzial`.`data` = '$data') and `przewoznik` = '$przewoznik'";
      }
    else
      {
        $query1 = "SELECT * FROM `rozkłady`
    WHERE `typ_rozkladu` = 'DP' and `nazwa_rozkladu` not in (SELECT `nazwa_rozkladu` from `rozkłady` LEFT JOIN `przydzial` on `rozkłady`.`id` = `przydzial`.`id_rozkladu` WHERE `przydzial`.`data` = '$data') and `przewoznik` = '$przewoznik'";
      }

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                    
                echo "<tr>
                <form method='POST' action='scripts/php/panel/plans/add_plans.php'>
                <input type='hidden' name='data' value='".$data."'/>
                <td><input type='hidden' name='numer_taborowy' value='".$row['numer_taborowy']."'/>".$row['numer_taborowy']."</td>
                <td>".$row['typ_taboru']."</td>
                <td><select name='rozklad'>";
                if ($result1 = @$connect->query($query1)) {
                    $statistic1 = $result1->num_rows;
                    if ($statistic1 > 0) {
                        while ($row1 = $result1->fetch_array()) {
                            echo "<option value='".$row1['nazwa_rozkladu']."'>".$row1['nazwa_rozkladu']." ".$row1['typ_taboru']." ".$row1['typ_rozkladu']."</option>";
                        }
                    }
                    else
                    {
                        echo "<option>Brak rozkładów</option>";
                    }
                };
                echo "</select></td>
                    <td><button type='submit'>Dodaj!</button></td>
                    </form></tr>";
            }
        }
        else {
            echo "<tr>
            <td colspan='2'>Wszystko na ten dzień przydzielone</td>
            </tr>";
        }
    }
?>