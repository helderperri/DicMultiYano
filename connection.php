<?php
$link = new mysqli("localhost", "linguasy_user", "Hutukara!", "linguasy_dicionariomultilingue");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}

 $link->set_charset("utf8");

    ?>