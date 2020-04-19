<!DOCTYPE html>
<?php
  session_start();
  if($_SESSION['zalogowany'] != true)
    {
      header("Location: login.php");
    }
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZTM Jakubowo</title>

    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta author="Wiktor Wiese">
    <meta name="keywords" content="ZTM, ZTM Jakubowo, Jakubowo, Zarząd Transportu Metropolitarnego">
    <meta name="theme-color" content="rgb(100, 128, 0)">

    <!--Style-->
    <link rel="stylesheet" type="text/css" href="styles/styles_main.css">
    <link rel="stylesheet" type="text/css" href="styles/styles_navbar_panel.css">
    <link rel="stylesheet" type="text/css" href="styles/styles_footer.css">
    <link rel="stylesheet" type="text/css" href="styles/styles_logo.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/bootstrap.min.css">


    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6a2e60bfe6.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="scripts/bootstrap/jquery.slim.min.js"></script>
    <script src="scripts/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>

<body>
    <?php
    include("layout/admin/header.php");
    $toInclude = isset($_GET['page']) ? $_GET['page'] : "main";
    include("pages/admin/$toInclude.php");
    include("layout/panel/footer.php");
    ?>
</body>

</html>