<?php

session_start();

if(!isset($_SESSION['user_id'])){

    header("location: index2.php");

}

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

    

        <div class='col-sm-offset-0 col-sm-4 containingDiv'>

    <div style='position: fixed;  top: 48px; z-index:1;'>         

            <h1>Dicion&#225;rio Mutil&#237;ngue<br> Yanomami</h1>

           
          

        <div style='width:368px; margin-bottom:6px; display: inline-block; float:left; z-index:1;'>      
              

                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=animais')" class="btn btn-info btn-sm" value='Animais'>Animais</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=plantas')" class="btn btn-info btn-sm" value='Plantas'>Plantas</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=manufaturas')" class="btn btn-info btn-sm" value='Manufatura'>Manufatura</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=natureza')" class="btn btn-info btn-sm" value='natureza'>Natureza</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=parentesco')" class="btn btn-info btn-sm" value='parentesco'>Parentesco</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=partes do corpo')" class="btn btn-info btn-sm" value='corpo'>Corpo</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=adjetivais')" class="btn btn-info btn-sm" value='adjetivais'>Adjetivais</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=verbos intransitivos')" class="btn btn-info btn-sm">Intransitivos</button>
                            <button style='float:left; z-index:1; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=verbos transitivos')" class="btn btn-info btn-sm">Transitivos</button>
                            
                            <button style='float:left; width:92px;' onclick="window.location = ('searchAlphabeticView.php?letter=a')" class="btn btn-success btn-sm">AaBbCc</button>    

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







        if(!empty($_GET['sd'])){ 



            $PHPprotectV23 = $_GET['sd']; 

  

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

 

 

 

                 

$sql="SELECT * FROM word_por WHERE semantic_domain  = '$PHPprotectV23' ORDER BY word_por";



 

                  

 

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

                $sd= $row["semantic_domain"];

        
              

                ?>

                <td><a href='wordDetailView.php?wordID=<?php echo "$id"; ?>&sd=<?php echo "$sd"; ?>&orign=2'><big><b><?php echo "$word_por"; ?></b></big></a><small> <?php echo "$word_class"; ?></small> <i><?php echo "$gloss_pt"; ?></i><br></td>

            

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

  
        <script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</body>

</html>