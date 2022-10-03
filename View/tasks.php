<?php
require_once './app/db.php';

// function showProducts() {
//     include './templates/header.php';

//     include './templates/form_alta.php';
//     $products = getAllProducts();
//     $getCategoryById = 'getCategoryById';

//     echo '<ul class="list-group">';
//     foreach ($products as $product) {
//        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
//                 <span> <b>$product->id</b> -<b>$product->nombre</b>-<b>$$product->precio</b><br> $product->descripcion</b><br><b>$product->id_categoria_fk</b>";
//         echo "</b> </span>
//                 <a href='delete/$product->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
//             </li>";
//         echo "</b> </span>
//                 <a href='update/$product->id' type='button' class='btn btn-primary ml-auto'>Modificar</a>
//             </li> ";
//     }
//     echo "</ul>";

//     include './templates/footer.php';
// }

function showCategories() {
    include './templates/header.php';

    $categories = getAllCategories();

    include './templates/form_alta_category.php';
    
    echo '<ul class="list-group">';
    foreach ($categories as $category) {
       echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> <b>$category->id</b> -<b>$category->nombre</b> </span>
                <a href='delete/$category->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
            </li>";
    }
    echo "</ul>";

    include './templates/footer.php';
}

function addProducts() {
    // TODO: validar entrada de datos
    $nombre = $_POST['product'];
    $precio = $_POST['price'];
    $descripcion = $_POST['description'];
    $id_categoria_fk =$_POST['category'];

    $id = insertProducts($nombre, $precio, $descripcion, $id_categoria_fk);

    header("Location: " . BASE_URL); 
}

function deleteProduct($id) {
    deleteProductById($id);
    header("Location: " . BASE_URL); 
}
function modifyProduct($id){
    $nombre = $_POST['product'];
    $precio = $_POST['price'];
    $descripcion = $_POST['description'];
    $id_categoria_fk =$_POST['category'];

    modifyProductById($id, $nombre, $precio, $descripcion, $id_categoria_fk);
    header("Location: " . BASE_URL);
}