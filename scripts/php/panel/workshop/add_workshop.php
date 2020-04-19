<?php
    session_start();
    require_once("../../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    
    $numer_taborowy = $_POST['numer_taborowy'];
    $data_poczatkowa = $_POST['data_poczatek'];
    $data_koncowa = $_POST['data_koniec'];
    $powod = $_POST['powod'];

    $search_vehicle = "SELECT `id` FROM `spis_taboru` WHERE `numer_taborowy`='".$numer_taborowy."'";

    if ($result = @$connect->query($search_vehicle)) {
        $search = $result->num_rows;
        if ($search > 0) {
            while ($row = $result->fetch_array()) {
                $id = $row['id'];
            }
        }
    };


    $query_add = "INSERT INTO `warsztat`(`id_pojazdu`, `data_poczatkowa`, `data_koncowa`, `powod`) VALUES ('$id','$data_poczatkowa','$data_koncowa','$powod')";

    $add_workshop = $connect->query($query_add);
    header("Location: ../../../../panel.php?page=add_workshop");
?>