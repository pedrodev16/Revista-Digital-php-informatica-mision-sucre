<?php

class SignOut extends Controller {
  
  public function __construct(){
    session_start();
    session_destroy();
    header('location: '.constant('URL'));
  }
  
}

?>