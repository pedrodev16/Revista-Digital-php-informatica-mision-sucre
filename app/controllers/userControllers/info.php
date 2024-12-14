<?php
require_once "app/models/userModels/selectModel.php";
class info extends Controller
{





    public function historia()
    {

        $selectModel = new SelectModel();
        $sql = $selectModel->select();
        $sql2 = $selectModel->ultima();
        $rows = $selectModel->getData($sql);
        $rows2 = $selectModel->getData($sql2);

        parent::__construct();
        $this->view->renderUser('home/index', [$rows, $rows2, 'historia']);
    }

    public function galeria()
    {

        $selectModel = new SelectModel();
        $sql = $selectModel->select();
        $sql2 = $selectModel->ultima();
        $rows = $selectModel->getData($sql);
        $rows2 = $selectModel->getData($sql2);

        parent::__construct();
        $this->view->renderUser('home/index', [$rows, $rows2, 'galeria']);
    }
    public function contacto()
    {

        $selectModel = new SelectModel();
        $sql = $selectModel->select();
        $sql2 = $selectModel->ultima();
        $rows = $selectModel->getData($sql);
        $rows2 = $selectModel->getData($sql2);

        parent::__construct();
        $this->view->renderUser('home/index', [$rows, $rows2, 'contacto']);
    }
}
