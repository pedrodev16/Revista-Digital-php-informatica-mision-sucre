<?php
require_once "app/models/userModels/selectModel.php";
class noticia extends Controller
{





    public function ver($id)
    {

        $selectModel = new SelectModel();
        $sql = $selectModel->select();
        $sql2 = $selectModel->select_ID($id);
        $rows = $selectModel->getData($sql);
        $rows2 = $selectModel->getData($sql2);

        parent::__construct();
        $this->view->renderUser('home/index', [$rows, $rows2, 'noticia']);
    }
}
