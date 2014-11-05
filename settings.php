<?php
include('config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RemindME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">    
        <link href="css/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
        <!--        <link rel="stylesheet" href="http://basehold.it/24">-->
    </head>
    <body>
        <div class="wrap clearfix">            
            <header class="main_heder">               
                <a href="home.php"><img class="home_logo" src="img/logo.png" alt="logo"></a>            
            </header>  
            <a class="menu_open" href="#my-menu"><i class="smaras fa fa-navicon"></i></a>            
            <nav id="my-menu">                
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="support.php">Support us</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="feedback.php">Send us feedback</a></li>
                </ul>
            </nav>

            <div class="settings_wrap">
                <form action="update.php" method="post">
                    <div class="input-group">
                        <span class="bla input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input class="form-control" type="email" placeholder="New Email" name="newemail">
                    </div> 
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="changeemail">Change Email</button>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" type="password" placeholder="New Password" name="newpassword">
                    </div>     
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" type="password" placeholder="Retype Password" name="newrepassword">
                    </div> 
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" type="password" placeholder="Old Password" name="oldpassword">
                    </div> 
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="changepassword">Change Password</button>
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
        <script src="js/jquery.mmenu.min.all.js" type="text/javascript"></script>
    </body>
</html>