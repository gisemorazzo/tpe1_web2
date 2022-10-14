<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ProductoView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($products, $categories){
        $this->smarty->assign('productos', $products);
        $this->smarty->assign('categorias', $categories);
        $this->smarty->display('templates/lista_productos.tpl');
    }
    function goToProducts(){
        header("Location: ".BASE_URL."list");
    }
    function showEditProduct($id){
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/editar_producto.tpl');
    }
    function deleteProduct($id) {
        deleteProductById($id);
    }
    function updateProducts($nombre, $precio, $descripcion, $id_categoria_fk){    
        updateProductsById($id);    
    }
}