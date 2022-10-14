<?php
require_once "./Model/ProductoModel.php";
require_once "./Model/CategoriaModel.php";
require_once "./View/ProductoView.php";

class ProductoController{

    private $productModel;
    private $categoryModel;
    private $view;


    function __construct(){
        $this->productModel = new ProductoModel();
        $this->categoryModel = new CategoriaModel();
        $this->view = new ProductoView();
    }

    function viewProducts(){
        $products = $this->productModel->getProducts();
        $categories = $this->categoryModel->getCategories();
        $this->view->showProducts($products, $categories);
    }
    function addProducts(){
        $this->productModel->insertProducts($_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['id_categoria_fk']);
        $this->view->goToProducts();
    }
    function deleteProduct($id){
        $this->productModel->deleteProduct($id);
        $this->view->goToProducts();
    }
    function updateProduct($id){
        $categories = $this->categoryModel->getCategories();
        $this->view->showEditProduct($id, $categories);
    }
    function goToProducts() {
        $this->view->goToProducts();
    }
}
