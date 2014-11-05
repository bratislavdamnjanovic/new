<?php
     include ('config.php');
     $logout = User::instance()->logOut();
     if($logout['status'] === 1) {
         header("location: index.php");
     }
         

