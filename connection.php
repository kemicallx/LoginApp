<?php 
    $dbhost = "localhost";  //DB Server
    $dbuser = "root";       //DB username
    $dbpass = "";           //DB user password 
    $dbname = "loginDB";    //DB name
    
    if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
        die("Failed to connect!");// code...
    }

 ?>
