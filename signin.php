<?php
    include ('config.php');
    $signin = User::instance()->signup($_POST['username'], $_POST['email'], $_POST['password'],
            $_POST['repassword']);
    $print_r($signin);

    

