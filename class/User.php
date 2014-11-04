<?php

class User {
    protected static $instance = null;

    public static function instance(){
        if($instance==null){
            $instance = new User();
        }
        return $instance;
    }
    
    private function __construct(){
        
    }
    
    public function login($username, $password){
       
    
        $error = "";
        if(isset($_POST['login'])){
            if(empty($username) || empty($password)){
                return EMPTY_USERNAME_PASSWORD;
            } else {
                $username = $_POST[$username];
                $password = md5($_POST[$password]);
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = $connection->query($query);
                $num_row = mysqli_num_rows($result);
                if($num_row==1){ //matched password 1
                    $row = mysqli_fetch_array($result);
                    $_SESSION['user']['email'] = $row['email'];
                    $_SESSION['user']['username'] = $row['username'];
                    header("location: home.php");
                }
                else{
                    $error = 0; //password didn't matched
                }
                
            }

        }           
    }
    
    public function addUser($username, $password, $email){
        $error = "";
        if(isset($_POST['register'])){
            if(empty($username)){
                return USER_EMPTY_USERNAME;
            }
            else if(empty($password)){
                return USER_EMPTY_PASSWORD;
            }
           
            else if(empty($email)){
                return USER_EMPTY_EMAIL;
            } 
            else{
                $queryCheck = "SELECT * FROM users WHERE username='$username' AND password='$password' AND email='$email'";
                $result = $connection->query($queryCheck);
                $num_row = mysqli_num_rows($result);
                if($num_row>0){
                    return USER_EXISTS;
                }
                else{
                    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
                    $result = $connection->query($query);
                    $num_row = mysqli_num_rows($result);
                    if($num_row==1)
                        return REGISTER_SUCCEDED;
                    
                    else
                        return NOT_REGISTERED;
                    
                }
                
            }
            
        }
    }
  
}