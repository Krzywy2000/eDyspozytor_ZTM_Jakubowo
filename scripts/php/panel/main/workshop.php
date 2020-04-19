<?php
    $query="SELECT * FROM workshop";

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $przewoznik = $_SESSION['access'];

    $query = "SELECT * FROM `warsztat`
    INNER JOIN `spis_taboru` on `spis_taboru`.`id` = `warsztat`.`id_pojazdu`
    WHERE `przewoznik`='$przewoznik'";

    if ($result = @$connect->query($query)) {
        $workshop = $result->num_rows;
        if ($workshop > 0) {
            echo "<tr class='table__main overflow-auto'>
                <th>Numer taborowy</th>
                <th>Powód</th>
                <th>Okres postoju</th>
                </tr>";
            while ($row = $result->fetch_array()) {
                echo "<tr class='table__main overflow-auto'>
                <td><a><b>".$row['numer_taborowy']."</b></a></td>
                <td>".$row['powod']."</td>
                <td><b>Od: </b>".$row['data_poczatkowa']."<br/><b>Do: </b>".$row['data_koncowa']."</td>
                </tr>";
            }
        }
    }
    else{
        echo "<tr class='table__main'>
        <td><a>Brak pojazdów na warsztacie</a></td>
        </tr>";
    }

?>