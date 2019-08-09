<?php

session_start();

//if(!isset($_SESSION['user_id'])){

  //  header("location: index2.php");

//}

session_start();

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

<!--        <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/jquery.selectbox.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/styling.css' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

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

<div class='container-fluid' style='width: auto; margin-top:36px; margin-bottom:48px;'>

    <div class='row' >



        <div class='col-sm-offset-0 col-sm-4'>

    <div style='position: fixed;  top: 48px; z-index:1;'>



            <h1>Dicion&#225;rio Mutil&#237;ngue<br> Yanomami</h1>

          <div style='width:368px; margin-bottom:6px; float: left; display: inline-block'>


              <script type='text/javascript' src='js/alphabeticToolbarView.js'>

            </script>

        <button style='float:left;' onclick="window.location = ('searchSemanticView.php?sd=animais')" class="btn btn-success btn-sm">Campos Semânticos</button>
            </div>

            </div>



  <?php



//$PHPprotectV22 = "";

$PHPprotectV23 = $_GET['wordID'];



//if(isset($_GET['wordID']) && strlen($_GET['wordID']) == 1)

//{ $PHPprotectV23 = preg_replace("/[^0-9]/", "", $_GET['wordID']);

//	if(strlen($PHPprotectV23) != 1){

//	echo "ERROR: Hack Attempt, after filtration the variable is empty."; exit(); }



$link->set_charset("utf8");







?>


    <div class="row" id='tableRsult' name='tableRsult' class='table table-hover stable-condensed' style="width: auto;">



        <!--  style='position: fixed;  top: 48px;'> margin-top:38px; margin-bottom:48px; margin-left:150px; -->



        <div class="col-xs-3 col-md-5" style=" margin-top:220px; position:fixed; z-index:1; ">

            <div  class="pre-scrollable" style="width: 260px; height: 210px;">











  <?php





 $link->set_charset("utf8");



//$PHPprotectV22 = "";







        if(!empty($_GET['letter'])){



            $PHPprotectV23 = $_GET['letter'];



//        if(isset($_GET['letter']) && strlen($_GET['letter']) == 1) {

//    $PHPprotectV22 = $_GET['letter'];

  //  $PHPprotectV23 = preg_replace('#[^a-z]#i', '', $_GET['letter']);

	//if(strlen($PHPprotectV23) != 1){

//	echo "ERROR: Hack Attempt, after filtration the variable is empty."; exit(); }





 //Gravando atividade do usuário



     $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

    $_SESSION['loginTime'] = date("Y-m-d h:i:s");

    $_SESSION['letter'] = $PHPprotectV23;

    $ip = $_SESSION['ip'];

    $loginTime = $_SESSION['loginTime'];

    $username =$_SESSION['username'];



    $sql = "INSERT INTO users_activities (`username`, `activity`, `item`, `ip`) VALUES ('$username', 'search alphabetic', '$PHPprotectV23', '$ip')";



            $query = mysqli_query($link, $sql);









 if($_GET['letter'] == 'A'){





$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'ã' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'a' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ã' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'A' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'á' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Á' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'à' COLLATE utf8_bin OR LEFT (word_por, 1) = 'À' COLLATE utf8_bin ORDER BY word_por";









 }elseif($_GET['letter'] == 'O'){





$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'o' COLLATE utf8_bin OR LEFT (word_por, 1) = 'õ' COLLATE utf8_bin OR LEFT (word_por, 1) = 'O' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Õ' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'ó' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ó' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'Ô' COLLATE utf8_bin OR LEFT (word_por, 1) = 'ô' COLLATE utf8_bin ORDER BY word_por";









 }elseif($_GET['letter'] == 'e'){





$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'e' COLLATE utf8_bin OR LEFT (word_por, 1) = 'E' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'é' COLLATE utf8_bin OR LEFT (word_por, 1) = 'É' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'ê' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ê' COLLATE utf8_bin ORDER BY word_por";







 }elseif($_GET['letter'] == 'u'){





$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'u' COLLATE utf8_bin OR LEFT (word_por, 1) = 'U' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'ú' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ú' COLLATE utf8_bin ORDER BY word_por";







 }elseif($_GET['letter'] == 'i'){





$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'i' COLLATE utf8_bin OR LEFT (word_por, 1) = 'I' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'í' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Í' COLLATE utf8_bin ORDER BY word_por";







 }else{





$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1)  = '$PHPprotectV23' ORDER BY word_por";



 }





if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result)>0){

     $id="";

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

//            $count++;

//            echo "<p>Row number: $count</p>";

//            print_r($row);

            ?>



        <tr>

            <?php



            if($id!=$row["word_id"]){



                               $id=$row["word_id"];

                $word_por= $row["word_por"];

                $word_class= $row["word_class"];

                $gloss_pt= $row["gloss_pt"];

              $firstChar= $_GET['letter'];

                ?>

                <td><a href='wordDetailView.php?wordID=<?php echo "$id"; ?>&letter=<?php echo "$firstChar"; ?>&orign=1'><big><b><?php echo "$word_por"; ?></b></big></a><small> <?php echo "$word_class"; ?></small> <i><?php echo "$gloss_pt"; ?></i><br></td>



            <?php



            }

            else{



             }

            ?>

            </tr>



<?php



            }



            ?>

                </div>

        </div>



            <?php

        //close the result set

        mysqli_free_result($result);

    }else{

        echo "<p>Não foram encontrados resultados para a busca.</p>";

    }



    }else{

    echo "<p>Não foi possível executar: $sql. " . mysqli_error($link) ."</p>";

} }

?>
            </div>

                <!-- incluir div com mapa dos dialetos e línguas Yanomami -->

        <?php include ("dialetosYanomami.php");?>







        </div>

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



</body>

</html>
