<!--This file receives: user_id, generated key to reset password, password1 and password2-->
<!--This file then resets password for user_id if all checks are correct-->
<?php
session_start();
include('connection.php');
//If user_id or key is missing
if(!isset($_POST['user_id']) || !isset($_POST['key'])){
    echo '<div class="alert alert-danger">Ocorreu um erro. Por favor, clique no link enviado para seu email.</div>'; exit;
}
//else
    //Store them in two variables
$user_id = $_POST['user_id'];
$key = $_POST['key'];
$time = time() - 86400;
    //Prepare variables for the query
$user_id = mysqli_real_escape_string($link, $user_id);
$key = mysqli_real_escape_string($link, $key);
    //Run Query: Check combination of user_id & key exists and less than 24h old
$sql = "SELECT user_id FROM forgotpassword WHERE rkey='$key' AND user_id='$user_id' AND time > '$time' AND status='pending'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
}
//If combination does not exist
//show an error message
$count = mysqli_num_rows($result);
if($count !== 1){
    echo '<div class="alert alert-danger">Por favor, tente novamente mais tarde.</div>';
    exit;
}

//Define error messages
$missingPassword = '<p><strong>Por favor, digite uma nova senha!</strong></p>';
$invalidPassword = '<p><strong>Sua senha deve conter ao menos uma letra mai&#250;scula e um n&#250;mero!</strong></p>';
$differentPassword = '<p><strong>As senhas n&#227;o conferem!</strong></p>';
$missingPassword2 = '<p><strong>Digite novamente sua senha</strong></p>';

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

//prepare variables for the query
$password = mysqli_real_escape_string($link, $password);
$password = md5($password);
//$password = hash('sha256', $password);
$user_id = mysqli_real_escape_string($link, $user_id);

//Run Query: Update users password in the users table
$sql = "UPDATE users SET password='$password' WHERE user_id='$user_id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Ocorreu um problema ao guardar sua senha no servidor!</div>';
//    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
    exit;
}

//set the key status to "used" in the forgotpassword table to prevent the key from being used twice
$sql = "UPDATE forgotpassword SET status='used' WHERE rkey='$key' AND user_id='$user_id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query</div>';
}else{
    echo '<div class="alert alert-success">Your password has been update successfully!<a href="index.php">Login</a></div>';  
}
?>