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
        <!--        <link rel="stylesheet" href="http://basehold.it/24">-->
    </head>
    <body>
        <div class="wrap">            
            <header class="main_heder">               
                <a href="home.php"><img class="logo" src="img/logo.png" alt="logo"></a>            
            </header>  
            <div class="login_wrap">
                <form action="login.php" method="post" enctype="multipart/form-data">
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input class="form-control" type="text" placeholder="Email address" name="email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>      
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Log in</button>
                    <button class="btnsignup btn btn-lg btn-primary btn-block" type="submit" name="signup">Sign up</button>
                </form> 
            </div> 
            <div class="signup_wrap">
                <form action="signin.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input class="form-control" type="text" placeholder="Username" name="username">
                    </div>   
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input class="form-control" type="email" placeholder="Email address" name="email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>     
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" type="password" placeholder="Retype Password" name="repassword">
                    </div>                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Sign up</button>
                    <button class="btnback btn btn-lg btn-primary btn-danger" type="submit" name="back">Back</button>
                </form>
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
        <script src="js/javascript.js"></script>
    </body>
</html>
