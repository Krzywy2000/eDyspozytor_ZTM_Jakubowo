<?php
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $limit = $month - 1;
    $query1="SELECT * FROM wiadomosci WHERE `data_dodania` > '".$year."-".$limit."-".$day."'";

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    

    if ($result = @$connect->query($query1)) {
        $news = $result->num_rows;
        if ($news > 0) {
            while ($row1 = $result->fetch_array()) {
                echo "<tr class='table__statements' name=".$row1['id'].">
                <td><a><b>".$row1['naglowek']."</b></a></td>
                <td><b>".$row1['data_dodania']."</b></td>
                </tr>
                <tr class='col-md-12 text'>
                <td>".$row1['tresc_skrocona']."</td>
                <td><a href='panel.php?page=news&id=".$row1['id']."'><u>Więcej...</u></a></td>
                </tr>";
            }
        }
    }

?>
