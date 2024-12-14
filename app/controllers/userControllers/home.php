<?php
require_once "app/models/userModels/selectModel.php";
class Home extends Controller
{





  public function __construct()
  {

    $selectModel = new SelectModel();
    $sql = $selectModel->select();
    $sql2 = $selectModel->ultima();
    $rows = $selectModel->getData($sql);
    $rows2 = $selectModel->getData($sql2);

    parent::__construct();
    $this->view->renderUser('home/index', [$rows, $rows2, 'inicio']);
  }
}
