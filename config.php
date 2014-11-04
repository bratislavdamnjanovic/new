<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* user defines */
define('USER_EMPTY_USERNAME', 1);
define('USER_EMPTY_PASSWORD', 2);
define('USER_EMPTY_EMAIL', 3);
define('EMPTY_USERNAME_PASSWORD', 4);
define('USER_EXISTS', 7);
define('REGISTER_SUCCEDED', 5);
define('NOT_REGISTERED', 6);
define('WRONG_PASSWORD', 8);

include ('db.php');
include ('Autoloader.php');