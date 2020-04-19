<?php
    $query1="SELECT * FROM wiadomosci";

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    

    if ($result = @$connect->query($query1)) {
        $news = $result->num_rows;
        if ($news > 0) {
            while ($row1 = $result->fetch_array()) {
                echo "<tr class='table__statements' name=".$row1['id'].">
                <td><a><b>".$row1['naglowek']."</b></a></td>
                <td colspan='2'><b>".$row1['data_dodania']."</b></td>
                </tr>
                <tr class='col-md-12 text'>
                <td>".$row1['tresc_skrocona']."</td>
                <td><a href='admin.php?page=news&id=".$row1['id']."'><u>Więcej...</u></a></td>
                <td><a href='admin.php?page=delete_news&id=".$row1['id']."'><u>Usuń</u></a></td>
                </tr>";
            }
        }
    }

?>
