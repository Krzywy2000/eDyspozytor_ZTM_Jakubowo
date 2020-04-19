<?php
    $query="SELECT * FROM komunikaty";

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");


    if ($result = @$connect->query($query)) {
        $statements = $result->num_rows;
        if ($statements > 0) {
                while ($row = $result->fetch_array()) {
                        echo "<tr class='table__main'>
                        <td>".$row['numery linii']."</td>
                        <td><b>".$row['data_poczatek']."</b><br/>";
                        if($row['data_koniec'] == '0000-00-00')
                        {
                            echo "";
                        }
                        else
                        {
                            echo "<b>".$row['data_koniec']."</b></td>";
                        }
                        echo "<td>".$row['temat']."</td>
                        <td><a href='admin.php?page=statements&id=".$row['id']. "'><u>Więcej...</u></a></td>
                        <td><a href='admin.php?page=delete_statements&id=".$row['id']."'><u>Usuń</u></a></td>
                        </tr>";
            }
        }
    }

?>