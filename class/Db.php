<?php

class Db {
    protected static $instance=null;
    private $_connection = null;
    
    public static function instance(){
        static $instance = null;
        if(self::$instance==null){
            $instance = new static();
        }
        return $instance;
    }
    
    private function __construct() {
        $this->_connection = new mysqli("localhost", "root", "", "remindme");
        if(!$this->_connection){
            die("Connection failed: ".mysqli_connect_error());
        } 
    }
    
    public function Db(){
        $this->_connection = new mysqli("localhost", "root", "", "remindme");
        if(!$this->_connection){
            die("Connection failed: ".mysqli_connect_error());
        } 
        return $this->_connection;
    }
    
    public function DbQuery($query){
        $result = $this->_connection->query($query);
        var_dump(mysqli_error($this->_connection));
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
