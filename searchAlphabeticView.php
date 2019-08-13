<?php

session_start();

//if(!isset($_SESSION['user_id'])){

  //  header("location: index2.php");

//}


//conect to the database

include('connection.php');



//logout

include('logout.php');



//remember me

include('remember.php');



$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];


$username = $_SESSION['username'];

date_default_timezone_set("America/Sao_Paulo");



$link->set_charset("utf8");



?>



<!DOCTYPE html>

<html lang='en'>

  <head>

    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale= 0.9'>

    <title>Dicion&#225;rio Mutil&#237;ngue Yanomami</title>
        <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/jquery.selectbox.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/styling.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<link rel="manifest" href="/site.webmanifest">

<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#da532c">
<meta name="msapplication-TileColor" content="#d82b5f">
<meta name="theme-color" content="#ffffff">

  </head>

    <body>



  <?php include('navView.php');?>

  <div class='container-fluid' style='width: auto; margin-top:36px; margin-bottom:98px; padding-bottom: 98px;'>
    <div class="row" id='tableRsult' name='tableRsult' class='table table-hover stable-condensed' style="width: auto;">

                                <?php include ("searchAlphabetic.php");?>

        <?php include ("dialetosYanomami.php");?>

        <?php include ("legenda.php");?>


        </div>

    </div>


<?php


include('forms2.php');


//bottomDic


include('bottonDic.php');

?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="js/login.js"></script>
<script src="js/legenda.js"></script>
<script src="js/path.js"></script>
<script src="js/sound.js"></script>



</body>

</html>
