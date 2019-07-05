<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abra sua conta no Dicion&#225;rio Multil&#237;ngue Yanomami</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="styling.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
  </head>
  <body>

<?php
//<!--Start session-->
session_start();
include('connection.php'); 
 $link->set_charset("utf8");

//<!--Check user inputs-->
//    <!--Define error messages-->
$missingUsername = '<p><strong>Insira seu nome ou um apelido!</strong></p>';
 $missingEmail = '<p><strong>Insira um email!</strong></p>';
$invalidEmail = '<p><strong>Insira um email v&#225;lido!</strong></p>';
$missingPassword = '<p><strong>Escolha uma senha!</strong></p>';
$invalidPassword = '<p><strong>Sua senha deve ter ao menos 6 caracteres e incluir ao menos uma letra mai&#250;scula e um n&#250;mero!</strong></p>';
$differentPassword = '<p><strong>Senham n&#227;o conferem!</strong></p>';
$missingPassword2 = '<p><strong>Confirme sua senha</strong></p>';
//    <!--Get username, email, password, password2-->
//Get username
if(empty($_POST["username"])){
    $errors .= $missingUsername;
}else{
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);   
}
//Get email
if(empty($_POST["email"])){
    $errors .= $missingEmail;   
}else{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= $invalidEmail;   
    }
}
//Get passwords
if(empty($_POST["password"])){
    $errors .= $missingPassword; 
}elseif(!(strlen($_POST["password"])>6
         and preg_match('/[A-Z]/',$_POST["password"])
         and preg_match('/[0-9]/',$_POST["password"])
        )
       ){
    $errors .= $invalidPassword; 
}else{
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING); 
    if(empty($_POST["password2"])){
        $errors .= $missingPassword2;
    }else{
        $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);
        if($password !== $password2){
            $errors .= $differentPassword;
        }
    }
}
//If there are any errors print error
if($errors){
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
    exit;
}

//no errors

//Prepare variables for the queries
$username = mysqli_real_escape_string($link, $username);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
$password = md5($password);
//$password = hash('sha256', $password);
//128 bits -> 32 characters
//256 bits -> 64 characters
//If username exists in the users table print error
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Erro processando a consulta!</div>';
//    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
    exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">Esse nomer de usu&#225;rio j&#225; existe. Escolha outro nome ou fa&#231;a o Login</div>';  exit;
}
//If email exists in the users table print error
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Erro processando a consulta2!</div>'; exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">Email j&#225; cadastrado. Fa&#231;a o Login ou recupere sua senha.</div>';  exit;
}
//Create a unique  activation code
$activationKey = bin2hex(openssl_random_pseudo_bytes(16));
    //byte: unit of data = 8 bits
    //bit: 0 or 1
    //16 bytes = 16*8 = 128 bits
    //(2*2*2*2)*2*2*2*2*...*2
    //16*16*...*16
    //32 characters

//Insert user details and activation code in the users table

$sql = "INSERT INTO users (`username`, `email`, `password`, `activation`) VALUES ('$username', '$email', '$password', '$activationKey')";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Ocorreu um erro ao inserir os dados do usu&#225;rio no servidor!</div>'; 
    exit;
}
      
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['signupTime'] = date("Y-m-d h:i:s");
  
    $ip = $_SESSION['ip'];            
    $signupTime = $_SESSION['signupTime'];
    $db_username = $_POST["username"];
     $sql = "UPDATE users SET ip='$ip', signup='$signupTime' WHERE username='$db_username' LIMIT 1";
            $query = mysqli_query($link, $sql);
       
    
//Send the user an email with a link to activate.php with their email and activation code
$message = "Clique no link  para ativar sua conta no Dicion&#225;rio Multil&#237;ngue Yanomami:\n\n";
$message .= "http://linguasyanomami.com/dicionariomultilingue/activate.php?email=" . urlencode($email) . "&key=$activationKey";
if(mail($email, 'Confirme seu cadastro', $message, 'From:'.'LinguasYanomami.org')){
       echo "<div class='alert alert-success'>Obrigado por seu cadastro! Um email de confirma&#231;&#227;o foi enviado para $email. Clique no link que foi enviado para ativar sua conta.</div>";
}
        
        ?>
              </body>
</html>