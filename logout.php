<?php
if(isset($_SESSION['user_id']) && $_GET['logout'] == 1){
    
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $ip = $_SESSION['ip'];            
    $username =$_SESSION['username'];
                      
    $sql = "INSERT INTO users_activities (`username`, `activity`, `item`, `ip`) VALUES ('$username', 'logout', '', '$ip')";
    
            $query = mysqli_query($link, $sql);
    

    
    session_destroy();
    setcookie("rememberme", "", time()-3600);
    
}

?>