<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autoloader
 *
 * @author Home
 */
class AutoLoader
{  
  public function __construct()
  {
    spl_autoload_register( array( $this, 'ClassLoader' ));
  }

  public function ClassLoader( $class )
  {    
    if( class_exists( $class, false ))
      return true;

    if( is_readable( 'class/' . $class . '.php' ))
          include_once 'class/' . $class . '.php';
  }
}

$autoloader = new AutoLoader();
