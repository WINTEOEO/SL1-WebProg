<?php

    $server = "localhost";
    $username = "root"; 
    $password = "";     
    $db_name = "sl_web_prog";
    
    $connection = mysqli_connect($server, $username, $password, $db_name); 
    
    if($connection){
    } else {
        throw new Exception("Mysql Connection Error:".mysqli_connect_error());
    }

?>