<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class CategoriaView{
    private $smarty;

    function __construct($email) {
        $this->smarty = new Smarty();
        $this->smarty->assign('email',$email);
    }

    function showCategories($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/lista_categorias.tpl');
    }
    function goCategories(){
        header("Location: ".BASE_URL."list_categories");
    }
    function deleteCategory($id) {
        deleteCategoryById($id);
    }
    function updateCategory($id,$nombre){    
        updateCategoryById($id);
    }
    function showEditCategory($id, $categories){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('categorias', $categories);
        $this->smarty->display('templates/editar_categoria.tpl');
    }
    function showProductsByCategory($products){
        $this->smarty->assign('productos', $products);
        $this->smarty->display('templates/categoria.tpl');
    }
}