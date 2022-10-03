<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class CategoriaView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showCategories($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/lista_categorias.tpl');
    }

}