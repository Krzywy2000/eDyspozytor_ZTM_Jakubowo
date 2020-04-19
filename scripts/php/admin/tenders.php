<?php
    $query2="SELECT * FROM `przetargi`";

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    

    if ($result = @$connect->query($query2)) {
        $tenders = $result->num_rows;
        if ($tenders > 0) {
            while ($row2 = $result->fetch_array()) {
                echo "<tr class='col-md-12 text table__main'>
                <td>".$row2['temat']."</td>
                <td colspan='2'><b>".$row2['data']."</b></td>
                <td><a href='admin.php?page=tenders&id=".$row2['id']."'><u>Więcej...</u></a></td>
                <td><a href='admin.php?page=delete_tenders&id=".$row2['id']."'><u>Usuń</u></a></td>
                </tr>";
            }
        }
    }

?>