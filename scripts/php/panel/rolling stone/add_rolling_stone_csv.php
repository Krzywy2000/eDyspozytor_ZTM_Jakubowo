<?php
require_once("../../db_connect.php");
$connect = new mysqli($host, $db_user, $db_password, $db_name);
@$connect->query("SET CHARSET utf8");

$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
echo $filename=$_FILES["plik"]['name'];
if($_FILES["plik"]["size"] > 0)
    {
        $file = fopen($plik_tmp, "r");
        //$sql_data = "SELECT * FROM prod_list_1 ";
        while (($emapData = fgetcsv($file, 10000, ";")) !== FALSE)
        {
            //print_r($emapData);
            //exit();
            $sql = "INSERT into spis_taboru ( `marka`, `model`, `rok_produkcji`, `rok_wprowadzenia`, `numer_taborowy`, `zajezdnia`, `czy_niskopodlogowy`, `czy_klima`, `czy_biletomat`, `typ_taboru`, `typ`, `przewoznik`, `uwagi`, `rysunek`) values ('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]')";
            mysqli_query($sql);
        }
        fclose($file);
        echo 'CSV File has been successfully Imported';
        //header('Location: index.php');
    }
?>