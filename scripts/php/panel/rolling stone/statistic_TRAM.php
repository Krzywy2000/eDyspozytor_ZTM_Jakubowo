<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];
    $year = date('Y');
   
    $query_tram = "SELECT min(rok_produkcji), round(avg(rok_produkcji),0), max(rok_produkcji), count(id) FROM `spis_taboru` WHERE `typ` = 'TRAMWAJ' and `przewoznik` = '$przewoznik'";
   
  
    if ($result = @$connect->query($query_tram)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                echo "<H4>Tramwaje:</H4><br/>";
                echo "<b>Wiek najstarszego pojazdu: </b>";
                echo $year - $row['min(rok_produkcji)'];
                echo "<a> lat(a)</a><br/>";
                echo "<b>Wiek najmłodszego pojazdu: </b>";
                echo $year - $row['max(rok_produkcji)'];
                echo "<a> lat(a)</a><br/>";
                echo "<b>Średni wiek taboru: </b>";
                echo $year - $row['round(avg(rok_produkcji),0)'];
                echo "<a> lat(a)</a><br/>";
                echo "<b>Ilość pojazdów: </b>";
                echo $row['count(id)'];
                echo "<a> sztuk(i)</a><br/>";
            }
        }
    }
?>