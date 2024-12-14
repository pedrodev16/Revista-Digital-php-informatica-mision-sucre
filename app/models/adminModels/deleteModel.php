<?php

class deleteModel extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function deleteNew($id)
  {
    try {
      $sql = "UPDATE NOTICES SET STATUS= 'F' WHERE ID= :Id";
      if ($query = $this->db->prepare($sql)) {
        $query->execute(['Id' => $id]);
        header('location: ' . constant('URL') . 'newsList/view');
      }
    } catch (PDOException $e) {
      echo 'Error DB: ' . $e->getMessage();
    }
  }
}
