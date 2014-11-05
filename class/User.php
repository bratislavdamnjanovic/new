<?php

class User {

    protected static $instance = null;

    public static function instance() {

        if (self::$instance == null) {
            $instance = new User();
        }
        return $instance;
    }

    private function __construct() {
        
    }

    public function isLogged() {
        return (isset($_SESSION['user']) && isset($_SESSION['user']['logged'])) ? $_SESSION['user']['logged'] : false;
    }

    public function login($email, $password) {

        if (empty($email) || empty($password) || $email == "" || $password == "") {
            return print_result(-3, null, 'Email and password required');
        } else {
            $email = self::test_input($email);
            $connection = Db::instance()->Db("localhost", "root", "", "remindme");
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = Db::instance()->DbQuery($query, $connection);
            $num_row = Db::instance()->NumRow($result);

            if ($num_row == 1) {
                $row = Db::instance()->fetchRow($result);
                $_SESSION['user']['email'] = $row['email'];
                $_SESSION['user']['username'] = $row['username'];
                $_SESSION['user']['logged'] = true;
                return print_result(1, $row, 'User successfully logged in');
            } else {
                return print_result(-2, null, '$Password or username incorrect');
            }
        }
    }

    public function signup($username, $email, $password, $repassword) {

        if (empty($username) || empty($password) || empty($email) || empty($repassword)) {
            return print_result(-2, null, "You need do fill everything");
        } else if ($password != $repassword) {
            return print_result(-2, null, "Retype password");
        } else {
            $connection = Db::instance()->Db("localhost", "root", "", "remindme");
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND email='$email'";
            $result = Db::instance()->DbQuery($query, $connection);

            $num_row = Db::instance()->NumRow($result);
            if ($num_row > 0) {
                return print_result(0, null, "User exists");
            } else {
                $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
                $result = Db::instance()->DbQuery($query, $connection);
                echo "User added";
            }
        }
    }

    public function logOut() {

        if (session_destroy())
            return print_result(-1, null, "User logged off.");
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
