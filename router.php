<?php
require_once './Controller/ProductoController.php';
require_once './Controller/CategoriaController.php';
require_once './Controller/userController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list';
}


// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$productoController = new ProductoController();
$categoriaController = new CategoriaController();
$userController = new userController();

// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $productoController->viewProducts();
        break;
    case 'list_categories':
        $categoriaController->viewCategories();
        break;
    case 'add_products':
        $productoController->addProducts();
        break;
    case 'add_category':
        $categoriaController->addCategory();
        break;
    case 'categoria':
        $id = $params[1];
        $categoriaController->getProductsByCategory($id);
        break;
    case 'detalle_producto':
        $id = $params[1];
        $productoController->detalleProducto($id);
        break;
    case 'deleteProduct':
        // obtengo el parametro de la acción
        $id = $params[1];
        $productoController->deleteProduct($id);
        break;
    case 'deleteCategory':
        $id = $params[1];
        $categoriaController->deleteCategory($id);
        break;
    case 'updateProduct':
        $id = $params[1];
        $productoController->updateProduct($id);
        break;
    case 'updateCategory':
        $id = $params[1];
        $categoriaController->updateCategory($id);
        break;
    case 'editProduct':
        $productoController->editProduct();
        break;
    case 'productos_por_categoria':
        $productoController->mostrarProductosPorCategoria();
        break;
    case 'login':
        $userController->login();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'verify': 
        $userController->verifyLogin();
        break;
    case 'createLogin':
        $userController->createLogin();
        break;  
    case 'createUser':
        $userController->createUser();
        break;
    default:
        echo('404 Page not found');
        break;
}


?>