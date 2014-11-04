<?php
    include ('config.php');
    
    print_r($_POST);
    
    $login = User::instance()->login($_POST['username'], $_POST['password']);
    
    if ($login) {
        
    } else {
        
    }
?>


    