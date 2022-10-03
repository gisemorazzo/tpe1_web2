<?php
require_once "./Model/ProductoModel.php";
require_once "./View/ProductoView.php";

class ProductoController{

    private $model;
    private $view;


    function __construct(){
        $this->model = new ProductoModel();
        $this->view = new ProductoView();
    }

    function viewProducts(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }

}
