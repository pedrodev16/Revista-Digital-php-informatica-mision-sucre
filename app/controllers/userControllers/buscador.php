<?php
require_once "app/models/userModels/selectModel.php";
class buscador extends Controller
{

  // public function __construct(){
  //   parent::__construct(); 


  //   $this->view->renderUser('home/index',[0]);
  // }




  public function fecha()
  {
    $data = $_POST['fecha'];
    $selectModel = new SelectModel();
    $sql = $selectModel->select();
    $rows = $selectModel->getData($sql);

    $sql2 = $selectModel->fecha_busqueda($data);
    $rb = $selectModel->getData($sql2);
    //print_r($rb);
    $this->view->renderUser('home/index', [$rows, $rb, 'resultado']);
  }
  public function categorias()
  {

    $selectModel = new SelectModel();
    $sql = $selectModel->select();
    $rows = $selectModel->getData($sql);

    $data = $_POST['categoria'];
    $sql2 = $selectModel->categ_busqueda($data);
    $rb = $selectModel->getData($sql2);
    //print_r($rb);
    $this->view->renderUser('home/index', [$rows, $rb, 'resultado']);
  }
  public function buscar()
  {
    $data = $_GET['buscar'];


    $selectModel = new SelectModel();
    $sql = $selectModel->select();
    $rows = $selectModel->getData($sql);

    $sql2 = $selectModel->rbusqueda($data);
    $rb = $selectModel->getData($sql2);
    //print_r($rb);
    $this->view->renderUser('home/index', [$rows, $rb, 'resultado']);
  }
}
