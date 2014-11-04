<?php
class User {
    
    
   protected static $instance = null;
    public static function instance(){
        
        if(self::$instance==null){
            $instance = new User();
        }
        return $instance;
    }
    
    private function __construct(){
        
    }
    
    public function isLogged() {
        return (isset($_SESSION['user']) && isset($_SESSION['user']['logged'])) ? $_SESSION['user']['logged'] : false;
    }
    
    public function login($username, $password){
       
    
        $error = "";
      
            if(empty($username) || empty($password) || $username=="" || $password==""){
                $error = "Empty username or password!";
                header("location: index.php");
                
                
            } else {
                //$username = check($username)
                $username = trim($username);
                $username = htmlspecialchars($username);
                $username = stripslashes($username);
                $password = $password;
                
                $connection = Db::instance()->Db();
                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
               
                $result = $connection->query($query);
        
                
                $num_row = mysqli_num_rows($result);
                echo $num_row;
                if($num_row==1){ //matched password 1
                    $row = mysqli_fetch_array($result);
                    $_SESSION['user']['email'] = $row['email'];
                    $_SESSION['user']['username'] = $row['username'];
                    $_SESSION['user']['logged'] = true;
                    header("location: home.php");
                }
                else{
                    echo "Password incorrect"; //password didn't matched
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
                $username = check($username);
                $email = check($password);
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
    
    public function logOut(){
        session_start();
        if(session_destroy()){
            header("location: index.php");
        }
    }
    
    public function check($data){
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
               
           }
        
  
}