<?php

class ErrorPage extends Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->view->renderUser('error/index', [0]);
  }
}
