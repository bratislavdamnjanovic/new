<?php
    include ('config.php');
 
    $login = User::instance()->login($_POST['email'], $_POST['password']);
    header("location: home.php");
    print_r($login);
    
    
?>


    