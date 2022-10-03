<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ProductoView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($products){
        $this->smarty->assign('productos', $products);
        $this->smarty->display('templates/lista_productos.tpl');
    }

}