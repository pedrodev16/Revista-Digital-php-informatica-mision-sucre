<?php
require_once "app/models/userModels/selectModel.php";
class galeria extends Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->view->renderUser('home/index', [0, 0, 'galeria']);
    }
}
