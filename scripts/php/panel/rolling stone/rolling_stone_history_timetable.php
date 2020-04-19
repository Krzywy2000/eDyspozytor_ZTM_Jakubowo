<?php
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $data = date('Y-m-d');
    $limit = $month - 1;
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $id = $_GET['id'];
    
    $query = "SELECT * FROM `przydzial`
    left join `rozkłady` on `rozkłady`.`id` = `przydzial`.`id_rozkladu`
    left join `spis_taboru` on `spis_taboru`.`id` = `przydzial`.`id_pojazdu`
    WHERE `id_pojazdu`=$id and `data` >= '".$year."-".$limit."-".$day."'";
  
    $query_archive = "SELECT * FROM `archiwum`
    left join `rozkłady` on `rozkłady`.`id` = `archiwum`.`id_rozkladu`
    left join `spis_taboru` on `spis_taboru`.`id` = `archiwum`.`id_pojazdu`
    WHERE `id_pojazdu`=$id and `data` <= '".$data."'
    order by `data` desc
    limit 7";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
              $date = $row['data'];
              if($date > $data)
                {
                  echo "";
                }
              else
                {
                echo "<tr>
                    <td>".$row['data']."</td>
                    <td>".$row['nazwa_rozkladu']."</td>
                </tr>";
                }
            }
        }
      }
    if ($result1 = @$connect->query($query_archive)) {
        $statistic1 = $result1->num_rows;
        if ($statistic1 > 0) {
            while ($row1 = $result1->fetch_array()) {   
                echo "<tr>
                    <td>".$row1['data']."</td>
                    <td>".$row1['nazwa_rozkladu']."</td>
                </tr>";
            }
        }
       }
        else {
            echo "<tr>
            <td colspan='2'>Brak kursów</td>
            </tr>";
        }
?>