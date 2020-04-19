<?php
    session_start();
    require_once("../../db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");
    $id = $_POST['id'];
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $rok_produkcji = $_POST['rok_produkcji'];
    $rok_wprowadzenia = $_POST['rok_wprowadzenia'];
    $numer_taborowy = $_POST['numer_taborowy'];
    $czy_niskopodlogowy = $_POST['czy_niskopodlogowy'];
    $czy_klima = $_POST['czy_klima'];
    $czy_biletomat = $_POST['czy_biletomat'];
    $typ_pojazdu = $_POST['typ_taboru'];
    $rodzaj_pojazdu = $_POST['rodzaj_pojazdu'];
    $rysunek = $_POST['rysunek'];
    $uwagi = $_POST['uwagi'];
    $zajezdnia = $_POST['zajezdnia'];
    $przewoznik = $_SESSION['access'];

    $query_modify = "UPDATE `spis_taboru` SET `marka`='$marka',`model`='$model',`rok_produkcji`=$rok_produkcji,`rok_wprowadzenia`='$rok_wprowadzenia',`numer_taborowy`='$numer_taborowy',`zajezdnia`='$zajezdnia',`czy_niskopodlogowy`='$czy_niskopodlogowy',`czy_klima`='$czy_klima',`czy_biletomat`='$czy_biletomat',`typ_taboru`='$typ_pojazdu',`typ`='$rodzaj_pojazdu',`przewoznik`='$przewoznik',`uwagi`='$uwagi',`rysunek`='$rysunek' WHERE `id`=$id";

    $modify_vehicle = $connect->query($query_modify);
    header("Location: ../../../../panel.php?page=rolling_stone_card&id=$id");
?>