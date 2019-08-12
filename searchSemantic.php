<div  class="col-md-5" style="display: inline-block; position: absolute; margin-left: 30px;">
  <div style='margin-top: auto; position:relative; display: block; z-index:-1'>
    <h1>Dicion&#225;rio Mutil&#237;ngue Yanomami</h1>
  </div>



    <div style='width:368px; margin-bottom:6px; position:relative; z-index: 5;'>

                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=animais')" class="btn btn-info btn-sm" value='Animais'>Animais</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=plantas')" class="btn btn-info btn-sm" value='Plantas'>Plantas</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=manufaturas')" class="btn btn-info btn-sm" value='Manufatura'>Manufatura</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=natureza')" class="btn btn-info btn-sm" value='natureza'>Natureza</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=parentesco')" class="btn btn-info btn-sm" value='parentesco'>Parentesco</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=partes do corpo')" class="btn btn-info btn-sm" value='corpo'>Corpo</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=adjetivais')" class="btn btn-info btn-sm" value='adjetivais'>Adjetivais</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=verbos intransitivos')" class="btn btn-info btn-sm">Intransitivos</button>
                      <button style='float:left; z-index:2; width:92px;' onclick="window.location = ('searchSemanticView.php?sd=verbos transitivos')" class="btn btn-info btn-sm">Transitivos</button>
                      <button style='float:left; width:92px;' onclick="window.location = ('searchAlphabeticView.php?letter=a')" class="btn btn-success btn-sm">AaBbCc</button>

      </div>

<div class="pre-scrollable list-group" style="width: 260px; height: 210px; margin-top: 106px; margin-left: 0px; align-items: left; position:relative; z-index: 6; border-width:0px;">





<?php



//$PHPprotectV22 = "";

$PHPprotectV23 = $_GET['wordID'];



//if(isset($_GET['wordID']) && strlen($_GET['wordID']) == 1)

//{ $PHPprotectV23 = preg_replace("/[^0-9]/", "", $_GET['wordID']);

//	if(strlen($PHPprotectV23) != 1){

//	echo "ERROR: Hack Attempt, after filtration the variable is empty."; exit(); }



$link->set_charset("utf8");







?>











<?php





$link->set_charset("utf8");



//$PHPprotectV22 = "";







if(!empty($_GET['sd'])){



$semanticDomain = $_GET['sd'];



//        if(isset($_GET['letter']) && strlen($_GET['letter']) == 1) {

//    $PHPprotectV22 = $_GET['letter'];

//  $semanticDomain = preg_replace('#[^a-z]#i', '', $_GET['letter']);

//if(strlen($semanticDomain) != 1){

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









$sql="SELECT * FROM word_por WHERE semantic_domain  = '$semanticDomain' ORDER BY word_por";









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

    $sd= $row["semantic_domain"];




    ?>

    <a id="<?php echo $id; ?>" class="list-group-item list-group-item-action" href='wordDetailView.php?wordID=<?php echo "$id"; ?>&sd=<?php echo "$sd"; ?>&orign=2'><big><b><?php echo "$word_por"; ?></b></big></a>



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
