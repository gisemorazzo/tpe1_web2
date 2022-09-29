<?php 

function getDB() {
    $db = new PDO('mysql:host=localhost;'.'dbname=db_tienda_natura;charset=utf8', 'root', '');
    return $db;
}

/**
 * Devuelve la lista de productos completa.
 */
function getAllProducts() {
    // 1. abro conexión a la DB
    $db = getDB();

    // 2. ejecuto la sentencia (2 subpasos)
    $query = $db->prepare("SELECT * FROM producto");
    $query->execute();

    // 3. obtengo los resultados
    $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $products;
}

/**
 * Devuelve la lista de categorias completa.
 */
function getAllCategories() {
    // 1. abro conexión a la DB
    $db = getDB();

    // 2. ejecuto la sentencia (2 subpasos)
    $query = $db->prepare("SELECT * FROM categoria");
    $query->execute();

    // 3. obtengo los resultados
    $categories = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $categories;
}

/**
 * Inserta una tarea en la base de datos.
 */
function insertProducts($nombre, $precio, $descripcion, $id_categoria_fk) {
    $db = getDB();
    $query = $db->prepare("INSERT INTO producto (nombre, precio, descripcion, id_categoria_fk) VALUES (?, ?, ?, ?)");
    $query->execute([$nombre, $precio, $descripcion, $id_categoria_fk]);

    return $db->lastInsertId();
}


/**
 * Elimina una tarea dado su id.
 */
function deleteProductById($id) {
    $db = getDB();
    $query = $db->prepare('DELETE FROM producto WHERE id = ?');
    $query->execute([$id]);
}