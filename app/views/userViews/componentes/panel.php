  <!-- Search widget-->
  <?php
  require_once "app/models/userModels/selectModel.php";
  $selectModel = new SelectModel();
  $sql = $selectModel->fechas();
  $rows = $selectModel->getData($sql);

  $sql_categoria = $selectModel->selectcategorias();
  $rows2 = $selectModel->getData($sql_categoria);
  include("app/views/userViews/componentes/buscar.php") ?>
  <!-- Categories widget-->
  <?php include("app/views/userViews/componentes/categorias.php") ?>
  <!-- Side widget-->
  <?php include("app/views/userViews/componentes/widget_dia.php") ?>
  <?php include("app/views/userViews/componentes/widget.php") ?>