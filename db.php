<?php
    $connection = new mysqli("localhost", "root", "", "remindme");
    if(!$connection){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected da";
   
?>