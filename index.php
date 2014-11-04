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
        <link rel="css/normalize.css" type="txt/css" href="css">
        <link rel="css/style.css" type="txt/css" href="css">
<!--        <link rel="stylesheet" href="http://basehold.it/24">-->
    </head>
    <body>
        <div class="wrap">
            <header class="main_heder">
                <div class="logo_wrap"></div>
                <div class="login"></div>
                <div class="top_nav"></div>
            </header>
            <form action="login.php" method="post">
                <input type="text" name="username"/>
                <input type="text" name="password"/>
                <input type="submit" name="Yes"/>
            </form>
            <div class="content_wrap"></div>
            <footer class="main_footer"></footer>
        </div>
    </body>
</html>
