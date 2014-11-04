<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author Home
 */
class Db {
    protected static $instance=null;
    
    public static function instance(){
        static $instance = null;
        if(self::$instance==null){
            $instance = new static();
        }
        return $instance;
    }
    
    private function __construct() {
        
    }
    
    public function Db(){
        $connection = new mysqli("localhost", "root", "", "remindme");
        if(!$connection){
            die("Connection failed: ".mysqli_connect_error());
        }
        return $connection;
    }
    
   
}
