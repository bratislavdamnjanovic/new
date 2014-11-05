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

    public function userID() {
        if ($this->isLogged()) {
            return $_SESSION['user']['id'];
        } else {
            return 0;
        }
    }

    public function userPassword() {
        return $_SESSION['user']['password'];
    }

    public function login($email, $password) {

        if (empty($email) || empty($password) || $email == "" || $password == "") {
            return print_result(-3, null, 'Email and password required');
        } else {
            $email = self::test_input($email);
            $connection = Db::instance()->Db();
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = Db::instance()->DbQuery($query, $connection);
            $num_row = Db::instance()->NumRow($result);

            if ($num_row == 1) {
                $row = Db::instance()->fetchRow($result);
                print_r($row);
                $_SESSION['user'] = $row;
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
            $connection = Db::instance()->Db();
            $query = "SELECT * FROM users WHERE username='$username' OR password='$password' OR email='$email'";
            $result = Db::instance()->DbQuery($query, $connection);
            $num_row = Db::instance()->NumRow($result);
            if ($num_row > 0) {
                return print_result(0, null, "User exists");
            } else {
                $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
                $result = Db::instance()->DbQuery($query, $connection);

                return print_result(1, null, "User added.");
            }
        }
    }

    public function changeMail($email) {
        if (empty($email)) {
            return print_result(-3, null, 'Empty email');
        } else {
            $connection = Db::instance()->Db();
            $id = $this->userID();
            $query = 'UPDATE users SET email=\'' . $email  . '\' WHERE  id =' . $id;
            $result = Db::instance()->DbQuery($query, $connection);
            echo $query;
            var_dump($result);
            if ($result) {
                return print_result(1, null, "Changed");
            }
        }
    }
    
    public function changePassword($password, $repassword, $oldpassword){
        if (empty($password) || empty($repassword) || empty($oldpassword)) {
            return print_result(-3, null, "Empty password fields.");
        } else if ($password != $repassword) {
            return print_result(-2, null, "Retype password.");
        }
        if ($oldpassword != $this->userPassword()) {
            return print_result(-1, null, "Old password incorrect");
        } else {
            $connection = Db::instance()->Db();
            $id = $this->userID();
            $query = 'UPDATE users SET password=\'' . $password . '\' WHERE  id =' . $id;
            $result = Db::instance()->DbQuery($query, $connection);
            echo $query;
            var_dump($result);
            if ($result) {
                return print_result(1, null, "Changed");
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
