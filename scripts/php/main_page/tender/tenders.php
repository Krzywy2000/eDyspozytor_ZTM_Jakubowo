<?php
    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $query = "SELECT * FROM przetargi";

    if ($result = @$connect->query($query)) {
        $statements = $result->num_rows;
        if ($statements > 0) {
            while ($row = $result->fetch_array()) {
                echo "<tr>
                <td>".$row['temat']."</td>
                <td>".$row['data']."</td>
                <td><a href='index.php?page=tenders_more&id=".$row['id']."'>Więcej...</a><br/></td>
                </tr>";
            }
        }
    }
?>