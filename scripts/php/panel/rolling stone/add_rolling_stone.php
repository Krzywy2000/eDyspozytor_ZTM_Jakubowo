<?php
    session_start();
    require_once("../../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $rok_produkcji = $_POST['rok_produkcji'];
    $rok_wprowadzenia = $_POST['rok_wprowadzenia'];
    $numer_taborowy = $_POST['numer_taborowy'];
    $czy_niskopodlogowy = $_POST['czy_niskopodlogowy'];
    $czy_klima = $_POST['czy_klima'];
    $czy_biletomat = $_POST['czy_biletomat'];
    $typ_pojazdu = $_POST['typ_pojazdu'];
    $rodzaj_pojazdu = $_POST['rodzaj_pojazdu'];
    $rysunek = $_POST['rysunek'];
    $uwagi = $_POST['uwagi'];
    $zajezdnia = $_POST['zajezdnia'];
    $przewoznik = $_SESSION['access'];

    $query_add = "INSERT INTO `spis_taboru`(`marka`, `model`, `rok_produkcji`, `rok_wprowadzenia`, `numer_taborowy`, `zajezdnia`, `czy_niskopodlogowy`, `czy_klima`, `czy_biletomat`, `typ_taboru`, `typ`, `przewoznik`, `uwagi`, `rysunek`) VALUES ('$marka','$model','$rok_produkcji','$rok_wprowadzenia','$numer_taborowy','$zajezdnia','$czy_niskopodlogowy','$czy_klima','$czy_biletomat','$typ_pojazdu','$rodzaj_pojazdu','$przewoznik','$uwagi','$rysunek')";

    $add_vehicle = $connect->query($query_add);
    header("Location: ../../../../panel.php?page=add_rolling_stone");
?>