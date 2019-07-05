<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
include('connection.php');


 $link->set_charset("utf8");

$user_id = $_SESSION['user_id'];

//get username and email
$sql = "SELECT * FROM users WHERE user_id='$user_id'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if($count == 1){
    $row = mysqli_fetch_array($result, MYSQL_ASSOC); 
    $username = $row['username'];
    $email = $row['email']; 
}else{
    echo "There was an error retrieving the username and email from the database";   
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
<html lang="en">
  <head>
        <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicion&#225;rio Multil&#237;ngue Yanomami</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/styling.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#da532c">
<meta name="msapplication-TileColor" content="#d82b5f">
<meta name="theme-color" content="#ffffff">
  </head>
    <body>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<?php
$username = $_SESSION['username'];
date_default_timezone_set("America/Sao_Paulo");
        
        
 $link->set_charset("utf8");
        ?>
        

<?php


//top dic
include('navView.php');


?>
    
<!--Container-->
      <div class="container" id="container">
          <div class="row">
              <div class="col-md-offset-3 col-md-6">

                  <h2>Sua Conta no Dicion&#225;rio Online:</h2>
                  <div class="table-responsive">
                      <table class="table table-hover table-condensed table-bordered">
                          <tr data-target="#updateusername" data-toggle="modal">
                              <td>Nome do Usu&#225;rio</td>
                              <td><?php echo $username; ?></td>
                          </tr>
                          <tr data-target="#updateemail" data-toggle="modal">
                              <td>Email</td>
                              <td><?php echo $email ?></td>
                          </tr>
                          <tr data-target="#updatepassword" data-toggle="modal">
                              <td>Senha</td>
                              <td>--*%#@%!?*%#@%!?--</td>
                          </tr>
                      </table>
                  
                  </div>
              
              </div>
          </div>
      </div>

 <?php

//All Ajax Forms
    
include('forms.php');

?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script src="js/profile.js"></script>
        <?php

//incluir bottonDic
include('bottonDic.php');

?>
  </body>
</html>