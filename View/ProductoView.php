<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ProductoView{
    private $smarty;

    function __construct($email) {
        $this->smarty = new Smarty();
        $this->smarty->assign('email',$email);
    }
    function showProducts($products, $categories){
        $this->smarty->assign('productos', $products);
        $this->smarty->assign('categorias', $categories);
        $this->smarty->display('templates/lista_productos.tpl');
    }
    function goToProducts(){
        header("Location: ".BASE_URL."list");
    }
    function showEditProduct($id, $categories){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('categorias', $categories);
        $this->smarty->display('templates/editar_producto.tpl');
    }
    function deleteProduct($id) {
        deleteProductById($id);
    }
    function updateProducts($nombre, $precio, $descripcion, $id_categoria_fk){    
        updateProductsById($id);    
    }
    function mostrarProductosPorCategoria($categories){
        $this->smarty->assign('categorias', $categories);
        $this->smarty->display('templates/productos_por_categoria.tpl');
    }
    function detalleProducto($product){
        $this->smarty->assign('producto', $product);
        $this->smarty->display('templates/detalle_producto.tpl');
    }
}