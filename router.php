<?php
require_once './Controller/ProductoController.php';
require_once './Controller/CategoriaController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$productoController = new ProductoController();
$categoriaController = new CategoriaController();

// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $productoController->viewProducts();
        break;
    case 'list_categories':
        $categoriaController->viewCategories();
        break;
    case 'add':
        addProducts();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        deleteProduct($id);
        break;
    case 'update':
        $id = $params[1];
        updateProduct($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
