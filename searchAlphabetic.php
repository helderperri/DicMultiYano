<div class="col-md-5" style="display: inline-block; position: absolute; margin-left: 30px;">

  <div style='margin-top: auto; position:relative; display: block; z-index:-1'>
    <h1>Dicion&#225;rio Mutil&#237;ngue Yanomami</h1>
  </div>



                          <div style='width:368px; margin-bottom:6px; position:relative; z-index: 5;'>
                              <script type='text/javascript' src='js/alphabeticToolbarView.js'></script>
                              <button style='float:left;' onclick="window.location = ('searchSemanticView.php?sd=animais')" class="btn btn-success btn-sm">Campos Semânticos</button>
                          </div>

<div class="pre-scrollable list-group" style="width: 260px; height: 210px; margin-top: 36px; margin-left:0px; position:relative; z-index:6; border-width:0px;">



<?php



//$PHPprotectV22 = "";

$PHPprotectV23 = $_GET['wordID'];



//if(isset($_GET['wordID']) && strlen($_GET['wordID']) == 1)

//{ $firstLetter = preg_replace("/[^0-9]/", "", $_GET['wordID']);

//	if(strlen($firstLetter) != 1){

//	echo "ERROR: Hack Attempt, after filtration the variable is empty."; exit(); }



$link->set_charset("utf8");







?>






<?php





$link->set_charset("utf8");



//$PHPprotectV22 = "";







if(!empty($_GET['letter'])){



$firstLetter = $_GET['letter'];



//        if(isset($_GET['letter']) && strlen($_GET['letter']) == 1) {

//    $PHPprotectV22 = $_GET['letter'];

//  $firstLetter = preg_replace('#[^a-z]#i', '', $_GET['letter']);

//if(strlen($firstLetter) != 1){

//	echo "ERROR: Hack Attempt, after filtration the variable is empty."; exit(); }





//Gravando atividade do usuário



$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

$_SESSION['loginTime'] = date("Y-m-d h:i:s");

$_SESSION['letter'] = $firstLetter;

$ip = $_SESSION['ip'];

$loginTime = $_SESSION['loginTime'];

$username =$_SESSION['username'];



$sql = "INSERT INTO users_activities (`username`, `activity`, `item`, `ip`) VALUES ('$username', 'search alphabetic', '$firstLetter', '$ip')";



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





$sql="SELECT * FROM word_por WHERE LEFT (word_por, 1)  = '$firstLetter' ORDER BY word_por";



}





if($result = mysqli_query($link, $sql)){

if(mysqli_num_rows($result)>0){

$id="";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

//            $count++;

//            echo "<p>Row number: $count</p>";

//            print_r($row);

?>




<?php



if($id!=$row["word_id"]){



$id=$row["word_id"];

$word_por= $row["word_por"];

$word_class= $row["word_class"];

$gloss_pt= $row["gloss_pt"];

$firstChar= $_GET['letter'];

?>

<a id="<?php echo $id; ?>" class="list-group-item list-group-item-action" href='wordDetailView.php?wordID=<?php echo $id; ?>&letter=<?php echo $firstChar; ?>&orign=1'><big><b><?php echo "$word_por"; ?></b></big></a>



<?php



}

else{



}

?>




<?php



}



?>




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
</div>
