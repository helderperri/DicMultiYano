<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index2.php");
}
?>
<?php
session_start();
//conect to the database
include('connection.php');
//logout
include('logout.php');
//remember me
include('remember.php');
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
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
		<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	
      <link rel="manifest" href="/site.webmanifest">
      
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#da532c">
<meta name="msapplication-TileColor" content="#d82b5f">
<meta name="theme-color" content="#ffffff">

      
      <!-- <link href="http://vjs.zencdn.net/7.0/video-js.min.css" rel="stylesheet"> -->
		<!--<link rel="stylesheet" type="text/css" href="css/videoGallery_scroll2.css" /> -->
		<!-- [if lte IE 8 ]><link rel="stylesheet" type="text/css" href="css/ie_below_9.css" /><![endif]-->
			
<!--        <script src="js/login.js"></script> -->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script src="jquery-2.2.4.js"></script>
		<script type="text/javascript" src="js/jquery.address.js"></script>
		<script src="js/npm.js"></script>
		<script type="text/javascript" src="js/jquery.dotdotdot-1.5.1.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script>
		<script type="text/javascript" src="js/jquery.apPlaylistManager.min.js"></script>
		<script type="text/javascript" src="js/jquery.apYoutubePlayer.min.js"></script>
		<script type="text/javascript" src="js/jquery.vg.settings_scroll2.js"></script>
		<script type="text/javascript" src="js/jquery.func.js"></script>
		<script type="text/javascript" src="js/jquery.vg.func.js"></script>
		<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript" src="http://www.youtube.com/player_api"></script> 
		<script type="text/javascript" src="js/jquery.videoGallery.min.js"></script>
        <script src="http://vjs.zencdn.net/7.0/video.min.js"></script>-->
  </head>
      <body>
<?php
$username = $_SESSION['username'];
date_default_timezone_set("America/Sao_Paulo");
        ?>
        
  <?php
//$PHPprotectV22 = ""; 
$PHPprotectV23 = $_GET['wordID'];
$orign = $_GET['orign'];
//if(isset($_GET['wordID']) && strlen($_GET['wordID']) == 1)
//{ $PHPprotectV23 = preg_replace("/[^0-9]/", "", $_GET['wordID']); 
//	if(strlen($PHPprotectV23) != 1){ 
//	echo "ERROR: Hack Attempt, after filtration the variable is empty."; exit(); } 
	
$link->set_charset("utf8");
            
            
                 ?>        
  <?php include('navView.php');?>
 
<div class='container-fluid' style='width: auto; margin-top:36px; margin-bottom:48px;'>
    <div class='row' >
    
                  

                
                <?php if($orign == 1){ 

    
    
    
?>           
        <div class='col-sm-offset-0 col-sm-4 containingDiv'">
            
            <div style='position: fixed;  top: 48px; z-index:1;'>         

                    <h1>Dicion&#225;rio Mutil&#237;ngue<br> Yanomami</h1>  

    
          <div style='width:368px; margin-bottom:6px; display: inline-block; float:left;'>

              
              <script type='text/javascript' src='js/alphabeticToolbarView.js'>

            </script>
                              <button style='float:left;' onclick="window.location = ('searchSemanticView.php?sd=animais')" class="btn btn-success btn-sm">Campos Semânticos</button>

            </div>   

                
                
                
                             
            
            </div>
    
            <div class="row" id='tableRsult' name='tableRsult' class='table table-hover stable-condensed' style="width: auto;">
                  <!--  style='position: fixed;  top: 48px;'> margin-top:38px; margin-bottom:48px; margin-left:150px; -->
        
                    <div class="col-xs-3 col-md-5" style=" margin-top:220px; position:fixed; z-index:1;">
                        <div class="pre-scrollable" style="width: 260px; height: 210px;  padding-bottom:48px;">
             
             <?php          
                            
                            
                            
    unset ($word_por);
    unset ($firstChar);
            
         			$sql = "SELECT word_por FROM word_por WHERE word_id = '$PHPprotectV23'";
         
         
$result = mysqli_query($link, $sql);
         
if(mysqli_num_rows($result)!==0){
    
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
              
                $word_por= $row["word_por"];
                $word_pho= $row["word_pho"];
           
}
            
        $firstChar = mb_substr($word_por, 0, 1, "UTF-8");
            
            
            if($firstChar == 'o' || $firstChar =='ó'|| $firstChar =='õ'|| $firstChar =='ò'|| $firstChar =='ô'){
     
     
$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'o' COLLATE utf8_bin OR LEFT (word_por, 1) = 'õ' COLLATE utf8_bin OR LEFT (word_por, 1) = 'O' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Õ' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'ó' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ó' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'Ô' COLLATE utf8_bin OR LEFT (word_por, 1) = 'ô' COLLATE utf8_bin ORDER BY word_por";}   
            
        
        elseif($firstChar == 'a' || $firstChar =='á'|| $firstChar =='ã'|| $firstChar =='à'|| $firstChar =='â'){
     
     
$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'ã' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'a' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ã' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'A' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'á' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Á' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'à' COLLATE utf8_bin OR LEFT (word_por, 1) = 'À' COLLATE utf8_bin ORDER BY word_por";
 
 
            }elseif($firstChar == 'i' || $firstChar =='í'){
     
            
            
            
            $sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'i' COLLATE utf8_bin OR LEFT (word_por, 1) = 'I' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'í' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Í' COLLATE utf8_bin ORDER BY word_por";
 
     
     
 }elseif($firstChar == 'u' || $firstChar =='ú'){ 
            
$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'u' COLLATE utf8_bin OR LEFT (word_por, 1) = 'U' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'ú' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ú' COLLATE utf8_bin ORDER BY word_por";
    
        
        }
                            elseif($firstChar == 'e' || $firstChar =='é'|| $firstChar =='ê'){
        
            $sql="SELECT * FROM word_por WHERE LEFT (word_por, 1) = 'e' COLLATE utf8_bin OR LEFT (word_por, 1) = 'E' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'é' COLLATE utf8_bin OR LEFT (word_por, 1) = 'É' COLLATE utf8_bin OR  LEFT (word_por, 1) = 'ê' COLLATE utf8_bin OR LEFT (word_por, 1) = 'Ê' COLLATE utf8_bin ORDER BY word_por";
 
            
        }
                            else{
     
                 
$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1)  = '$firstChar' ORDER BY word_por";
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
                $sd=$_GET["sd"];
              
                ?>
                <td><a href='wordDetailView.php?wordID=<?php echo "$id"; ?>&sd=<?php echo "$sd"; ?>&letter=<?php echo "$firstChar"; ?>&orign=<?php echo "$orign"; ?>'><big><b><?php echo "$word_por"; ?></b></big></a><small> <?php echo "$word_class"; ?></small> <i><?php echo "$gloss_pt"; ?></i><br></td>
            
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
} 
?>

 
   <!--fim da seleção -->
                
       </div>
                
             <?php include ("dialetosYanomami.php");?>
        
                

                
                
  <?php          

        }elseif($orign == 2){ 
    
?>    
    
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


                
                        <!-- começo da seleção-->
            </div>
    
            <div class="row" id='tableRsult' name='tableRsult' class='table table-hover stable-condensed' style="width: auto;">
                  <!--  style='position: fixed;  top: 48px;'> margin-top:38px; margin-bottom:48px; margin-left:150px; -->
        
                    <div class="col-xs-3 col-md-5" style=" margin-top:220px; position:fixed; z-index:1; ">
                        <div class="pre-scrollable" style="width: 260px; height: 210px;">
             
             <?php          
                            
                            
            $sd3 = $_GET["sd"];

            
    
                 
$sql="SELECT * FROM word_por WHERE semantic_domain  = '$sd3' ORDER BY word_por";
    
     
        
            
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
                $sd2=$row["semantic_domain"];
              
                ?>
                <td><a href='wordDetailView.php?wordID=<?php echo "$id"; ?>&sd=<?php echo "$sd2"; ?>&letter=<?php echo "$firstChar"; ?>&orign=<?php echo "$orign"; ?>'><big><b><?php echo "$word_por"; ?></b></big></a><small> <?php echo "$word_class"; ?></small> <i><?php echo "$gloss_pt"; ?></i><br></td>
            
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
} 
?>

                </div> 
              <?php include ("dialetosYanomami.php");?>
       <!--fim da seleção -->
 
                
  <?php }else{ ?>     </div>    <?php include ("dialetosYanomami.php");?>
 <?php } ?>  
   
                
                
                

                
             <!-- incluir div com mapa dos dialetos e línguas Yanomami -->


	             
</div>            

            
                      
            </div></div>


        <?php
include('forms2.php');
//bottomDic
include('bottonDic.php');
?>



           <script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
       	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/ion.sound.js"></script>

<script>

var som1 = document.getElementsByTagName("a")[id='xsuawa'].getAttribute("audio");
var xsuawa = new Audio ();
xsuawa.src = `sounds/${som1}` ;

var som2 = document.getElementsByTagName("a")[id='shberc'].getAttribute("audio");
var shberc = new Audio ();
shberc.src = `sounds/${som2}` ;

var som3 = document.getElementsByTagName("a")[id='shbbxm'].getAttribute("audio");
var shbbxm = new Audio ();
shbbxm.src = `sounds/${som3}` ;

var som4 = document.getElementsByTagName("a")[id='wcascc'].getAttribute("audio");
var wcascc = new Audio ();
wcascc.src = `sounds/${som4}` ;

var som5 = document.getElementsByTagName("a")[id='yropcu'].getAttribute("audio");
var yropcu = new Audio ();
yropcu.src = `sounds/${som5}` ;

var som6 = document.getElementsByTagName("a")[id='guurai'].getAttribute("audio");
var guurai = new Audio ();
guurai.src = `sounds/${som6}` ;

//Regex to remove 
//var som1b = som1.replace(/\.[^/.]+$/, "");

</script>



   </body>
</html>