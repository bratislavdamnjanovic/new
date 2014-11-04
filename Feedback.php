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
        <title>Feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
<!--        <link rel="stylesheet" href="http://basehold.it/24">-->
    </head>
    <body>
        <div class="wrap">            
            <header class="main_heder">               
                <a href="home.php"><img class="logo" src="img/logo.png" alt="logo"></a>
            </header>
            <p>Neki text</p>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control" placeholder="Comment"></textarea>
            </div>
            <div class="submit">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Submit</button>
            </div>
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
    </body>
</html>
