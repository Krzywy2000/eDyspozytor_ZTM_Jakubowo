<?php
    session_start();
  
  if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
  {
    header('Location: ../../../login.php');
    exit();
  }

  require_once "../db_connect.php";

  $connect = new mysqli($host, $db_user, $db_password, $db_name);
  $connect -> query("SET NAMES 'utf8';");
    $connect -> query("SET CHARACTER_SET 'utf8_general_ci';");
  
  if ($connect->connect_errno!=0)
  {
    echo "Error: ".$connect->connect_errno;
  }
  else
  {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $password = htmlentities($password, ENT_QUOTES, "UTF-8");
    
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $limit = $month - 1;
  

    if ($result = @$connect->query(
    sprintf("SELECT * FROM uzytkownicy WHERE login = '%s' and haslo = '%s'",
    mysqli_real_escape_string($connect,$login),
    mysqli_real_escape_string($connect,$password))))
    {
      $ilu_userow = $result->num_rows;
      if($ilu_userow>0)
      {
        $_SESSION['zalogowany'] = true;
        
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['password'] = $row['haslo'];
        $_SESSION['e-mail'] = $row['email'];
        $_SESSION['access'] = $row['dostep'];
        $_SESSION['imie'] = $row['imie'];
        $_SESSION['nazwisko'] = $row['nazwisko'];
        
        $przewoznik = $_SESSION['access'];
        
        unset($_SESSION['blad']);
        $result->free_result();
        
        $del_plans = "DELETE FROM `przydzial` 
        INNER JOIN `rozkłady` on `przydzial`.`id_rozkladu` = `rozkłady`.`id`
        WHERE `data` = '".$year."-".$limit."-".$day."' and `przewoznik` = '".$przewoznik."'";
        $del_workshop = "DELETE FROM `warsztat` 
        INNER JOIN `spis_taboru` on `warsztat`.`id_pojazdu` = `spis_taboru`.`id`
        WHERE `data_koncowa` = '".$year."-".$limit."-".$day."' and `przewoznik` = '".$przewoznik."'";
        
        $delete_plans = $connect->query($del_plans);
        $delete_workshop = $connect->query($del_workshop);

        //$date = date("Y-m-d");
        //mysqli_query("UPDATE users SET last_login = '$ip' WHERE id = '$_SESSION[id]'");
        
        if($_SESSION['access'] == 'Admin')
        {
          header('Location: ../../../admin.php');
        }
                else
        {
          header('Location: ../../../panel.php');
        }
      } 
      else 
      {
        header('Location: ../../../login.php');
      }
      
    }
    
    $connect->close();
  }
?>