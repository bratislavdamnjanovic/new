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
        <title>Remind me</title>
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
            <div class="login">
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    <input class="form-control" type="text" placeholder="Email adresa">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                    <input class="form-control" type="password" placeholder="Lozinka">
                </div>      
                <button class="btn btn-lg btn-primary btn-block btn-success" type="submit" name="submit">Sign in</button>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
            </div>
        </div>
<!--            <div class="container">
                     <h1>Imate mnogo obaveza, stalno ste u žurbi? Zaboravljate? Mi imamo rešenje za vas! <span>Remind ME</span> je dizajniran da vam pomogne u sistematizaciji i realizaciji Vaših aktivnosti. </h1>
                </div>-->
            <footer class="main_footer">
                <p>Sva prava zadržana  2014 &copy RemidME</p>               
            </footer>        
        <script src="js/jquery.js"></script>        
        <script src="js/bootstrap.js"></script>
        <script src="js/fontawesome.js"></script>


    </body>
</html>
