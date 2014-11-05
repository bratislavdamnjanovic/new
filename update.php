<?php
    include ('config.php');
    
       $update = User::instance()->change($_POST['newemail'], $_POST['newpassword'], $_POST['newrepassword'], $_POST['oldpassword']);
       
    print_r($update);