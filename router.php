<?php
require_once './app/tasks.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);


// tabla de ruteo
switch ($params[0]) {
    case 'list':
        showProducts();
        break;
    case 'list_categories':
        showCategories();
        break;
    case 'add':
        addProducts();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        deleteProduct($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
