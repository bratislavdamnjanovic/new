<?php
    include ('config.php');
    
       $updateEmail = User::instance()->changeMail($_POST['newemail']);
       $updatePassword = User::instance()->changePassword($_POST['newpassword'], $_POST['newrepassword'], $_POST['oldpassword']);
      
    print_r($updateEmail);
    echo "<br>";
    print_r($updatePassword);