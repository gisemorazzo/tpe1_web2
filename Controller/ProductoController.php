<?php
require_once "./Model/ProductoModel.php";
require_once "./Model/CategoriaModel.php";
require_once "./View/ProductoView.php";
require_once "./helpers/authHelper.php";

class ProductoController{

    private $productModel;
    private $categoryModel;
    private $view;
    private $helper;

    function __construct(){
        $this->helper = new AuthHelpers();
        $this->productModel = new ProductoModel();
        $this->categoryModel = new CategoriaModel();
        $this->view = new ProductoView($this->helper->getEmail());
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
    function editProduct(){
        $this->productModel->updateProduct($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['id_categoria_fk']);
        $this->view->goToProducts();
    }
    function mostrarProductosPorCategoria(){
        $categories = $this->categoryModel->getCategories();
        $this->view->mostrarProductosPorCategoria($categories);
    }
    function detalleProducto($id){
        $product = $this->productModel->getProduct($id);
        $this->view->detalleProducto($product);
    }
}
