<?php
require_once "./Model/CategoriaModel.php";
require_once "./View/CategoriaView.php";

class CategoriaController{

    private $model;
    private $view;


    function __construct(){
        $this->model = new CategoriaModel();
        $this->view = new CategoriaView();
    }

    function viewCategories(){
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }

}