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
    function addCategory(){
        $this->model->insertCategory($_POST['category']);
        $this->view->goCategories();
    }
    function deleteCategory($id){
        $this->model->deleteCategory($id);
        $this->view->goCategories();
    }
    function updateCategory($id){
        $categories = $this->model->updateCategory($id);
        $this->view->goCategories();
    }
}