<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $id = $_GET['id'];
    
    $query = "SELECT * FROM `spis_taboru` WHERE `id`=$id";

    if ($result = @$connect->query($query)) {
        $statistic = $result->num_rows;
        if ($statistic > 0) {
            while ($row = $result->fetch_array()) {
                    echo "<b>Marka: </b>".$row['marka']."<br/>
                    <b>Model: </b>".$row['model']."<br/>
                    <b>Rodzaj pojazdu: </b>".$row['typ_taboru']."<br/>
                    <b>Typ pojazdu: </b>".$row['typ']."</br>
                    <b>Rok produkcji: </b>".$row['rok_produkcji']."<br/>
                    <b>Rok wprowadzenia do eksploatacji: </b>".$row['rok_wprowadzenia']."<br/>
                    <b>Zajezdnia: </b>".$row['zajezdnia']."<br/><br/>
                    <b>Informacje dodatkowe:</b><br/>";
                    if($row['czy_niskopodlogowy'] == "TAK")
                    {
                        echo "<i class='fas fa-wheelchair'></i>";
                    }
                    if($row['czy_klima'] == "TAK")
                    {
                        echo "<a> </a><i class='fas fa-snowflake'></i>";
                    }
                    if($row['czy_biletomat'] == "TAK")
                    {
                        echo "<a> </a><i class='fas fa-ticket-alt'></i>";
                    }
                    if($row['czy_klima'] == "NIE" && $row['czy_niskopodlogowy'] == "NIE" && $row['czy_biletomat'] == "NIE")
                    {
                        echo "<i>Brak</i>";
                    }
                    echo "<br/><br/>";
                    echo "<b>Rysunek:</b><br/>";
                    if($row['rysunek'] == "")
                    {
                        echo "<i>W przygotowaniu</i>";
                    }
                    else
                    {
                        echo "<table class='table-responsive'>
                            <tr>
                                <td><img class='table__image' src='images/rolling_stone/Buses/".$row['rysunek'].".png'/></td>
                            </tr>
                        </table>";
                    }
                    echo "<br/><br/><b>Uwagi:</b><br/>";
                    if($row['uwagi'] == "")
                    {
                        echo "<i>Brak</i>";
                    }
                    else
                    {
                        echo $row['uwagi'];
                    }
            }
        }
    }
?>