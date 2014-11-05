<?php
include('config.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>RemindME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">    
        <link href="css/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
        <!--        <link rel="stylesheet" href="http://basehold.it/24">-->
    </head>
    <body>
        <div class="wrap">             
            <a class="menu_open" href="#my-menu"><i class="fa fa-navicon"></i></a>
            <img class="home_logo" src="img/logo.png">
            <nav id="my-menu">                
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="suport.php">Support us</a></li>
                    <li><a href="settings.php">Settings</a></li>
                </ul>
            </nav>
        </div>
        <footer class="main_footer">
            <div class="icon_wrap">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
            </div>
            <p>All rights reserved &copy 2014 RemidME</p>                
        </footer>        
        <script src="js/jquery.js"></script>        
        <script src="js/bootstrap.js"></script>
        <script src="js/fontawesome.js"></script>
        <script src="js/javascript.js"></script>  
        <script src="js/jquery.mmenu.min.all.js" type="text/javascript"></script>
    </body>
</html>
