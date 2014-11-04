<?php
    include ('config.php');
 
    $login = User::instance()->login($_POST['email'], $_POST['password']);
    
    print_r($login);
    
    
?>


    