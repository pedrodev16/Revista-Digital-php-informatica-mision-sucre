<?php

class SelectModel extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function ultima()
  {
    $sql = 'SELECT * FROM  NOTICES ORDER BY ID DESC
LIMIT 1;';
    return $sql;
  }
  public function fechas()
  {
    $sql = "SELECT * FROM  NOTICES ORDER BY ID DESC;";
    return $sql;
  }
  public function selectcategorias()
  {
    $sql = 'SELECT * FROM categorias';
    return $sql;
  }
  public function select()
  {
    $sql = 'SELECT * FROM NOTICES';
    return $sql;
  }
  public function select_ID($ID)
  {
    $sql = 'SELECT * FROM NOTICES WHERE ID=' . $ID . '';
    return $sql;
  }
  public function categ_busqueda($r)
  {
    $sql = "SELECT * FROM `NOTICES` WHERE `SECTION` LIKE '%$r%'";
    return $sql;
  }
  public function rbusqueda($r)
  {
    $sql = "SELECT * FROM `NOTICES` WHERE `TITLE` LIKE '%$r%' AND `DESCRIPTION` LIKE '%$r%'";
    return $sql;
  }


  public function fecha_busqueda($r)
  {
    $sql = "SELECT * FROM `NOTICES` WHERE `DATE` LIKE '%$r%'";
    return $sql;
  }
  public function selectWhere($sect)
  {
    $sql = 'SELECT * FROM NOTICES WHERE SECTION="' . $sect . '"';
    return $sql;
  }

  public function getData($sql)
  {
    try {
      $data = null;

      if ($consult = $this->db->query($sql)) {
        while ($row = $consult->fetch(PDO::FETCH_ASSOC)) {
          $data[] = $row;
        }
      }
      return $data;
    } catch (PDOException $e) {
      echo 'Error DB: ' . $e->getMessage();
    }
  }
}
