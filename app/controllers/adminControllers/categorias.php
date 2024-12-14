<?php
include_once 'app/models/adminModels/selectModel.php';
class categorias extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function view()
  {
    $selectModel = new SelectModel();
    $sql = $selectModel->selectcategorias();
    $rows = $selectModel->getData($sql);
    $this->view->renderAdmin('categori/index', $rows);
  }
  public function reg()
  {
    $this->view->renderAdmin('categori/rcategoria', [0]);
  }


  public function insert()
  {

    $categoria = $_POST['categorias'];
    $date = date('Y-m-d H:i:s');



    $dates = [
      'categoria' => $categoria,

      'date' => $date
    ];
    $model = $this->requireModelAdmin('insertModel');
    $model->insertcategoria($dates);

    header('location: ' . constant('URL') . 'categorias/view');
  }


  public function delete()
  {
    $id = $_GET['ID'];
    if (!isset($_GET['ID'])) {
      header('location: ' . constant('URL') . 'newsList/view');
    }

    $model = $this->requireModelAdmin('deleteModel');
    $model->deleteNew($id);
  }

  public function edit()
  {
    $this->view->renderAdmin('editForm/index');
    if (!isset($_GET['ID'])) {
      header('location: ' . constant('URL') . 'newsList/view');
    }
  }

  public function update()
  {
    $id = $_GET['ID'];
    $section = $_POST['sectionPost'];
    $title = $_POST['titlePost'];
    $desc = $_POST['descPost'];
    $dates = [
      'section' => $section,
      'title' => $title,
      'desc' => $desc,
      'id' => $id
    ];

    $model = $this->requireModelAdmin('editModel');
    $model->editNew($dates);
  }
}
