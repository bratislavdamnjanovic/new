<?php

class Autoloader
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

$autoloader = new Autoloader();