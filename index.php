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

            <div class="content_wrap"></div>
            <footer class="main_footer"></footer>
            <form action="login.php" method="post" enctype="multipart/form-data">
            <div class="login.php">
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    <input class="form-control" type="text" placeholder="Email adresa" name="username">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                    <input class="form-control" type="password" placeholder="Lozinka" name="password">
                </div>      
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
            </div>
            </form>
            <footer class="main_footer">
                <p>Sva prava zadržana  2014 &copy RemidME</p>               
            </footer>
        </div>
        
        </div>
        <script src="js/jquery.js"></script>        
        <script src="js/bootstrap.js"></script>
        <script src="js/fontawesome.js"></script>


    </body>
</html>
