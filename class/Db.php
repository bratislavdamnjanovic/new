<?php

class Db {
    protected static $instance=null;
    private $connection = "";
    
    public static function instance(){
        static $instance = null;
        if(self::$instance==null){
            $instance = new static();
        }
        return $instance;
    }
    
    private function __construct() {
        
    }
    
    public function Db($localhost, $username, $password, $database){
        $connection = new mysqli($localhost, $username, $password, $database);
        if(!$connection){
            die("Connection failed: ".mysqli_connect_error());
        } 
        return $connection;
    }
    
    public function DbQuery($query, $connection){
        $result = $connection->query($query);
        return $result;
    }
    
    public function NumRow($data){
        $num_row = mysqli_num_rows($data);
        return $num_row;
    }
    
    public function fetchRow($data){
        $row = mysqli_fetch_array($data);
        return $row;
    }
   
}
