<?php
require_once "./Model/CategoriaModel.php";
require_once "./View/CategoriaView.php";
require_once "./helpers/authHelper.php";

class CategoriaController{

    private $model;
    private $view;
    private $helper;

    function __construct(){
        $this->helper = new AuthHelpers();
        $this->model = new CategoriaModel();
        $this->view = new CategoriaView($this->helper->getEmail());
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
    function getProductsByCategory($id){
        $products = $this->model->getProductsByCategory($id);
        $this->view->showProductsByCategory($products);
    }
}