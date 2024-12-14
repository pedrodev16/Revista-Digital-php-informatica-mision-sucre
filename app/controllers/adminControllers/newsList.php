<?php
include_once 'app/models/adminModels/selectModel.php';
class NewsList extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function view()
  {
    $this->view->renderAdmin('newsList/index', [0]);
  }



  public function repost()
  {
    $id = $_GET['ID'];
    if (!isset($_GET['ID'])) {
      header('location: ' . constant('URL') . 'newsList/view');
    }

    $model = $this->requireModelAdmin('editModel');
    $model->repos($id);
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


    $id = $_GET['ID'];
    $model = new SelectModel();
    $sql = $model->selectWhere($id);
    $rows1 = $model->getData($sql);

    $sql = $model->selectcategorias();
    $rows2 = $model->getData($sql);


    $this->view->renderAdmin('editForm/index', [$rows1, $rows2]);
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
