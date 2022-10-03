<?php 

function getDB() {
    $db = new PDO('mysql:host=localhost;'.'dbname=db_tienda_natura;charset=utf8', 'root', '');
    return $db;
}


function getAllProducts() {

    $db = getDB();
    $query = $db->prepare("SELECT * FROM producto");
    $query->execute();

    $products = $query->fetchAll(PDO::FETCH_OBJ); 
    
    return $products;
}
function getAllCategories() {
    $db = getDB();


    $query = $db->prepare("SELECT * FROM categoria");
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_OBJ); 
    
    return $categories;
}


 
function insertProducts($nombre, $precio, $descripcion, $id_categoria_fk) {
    $db = getDB();
    $query = $db->prepare("INSERT INTO producto (nombre, precio, descripcion, id_categoria_fk) VALUES (?, ?, ?, ?)");
    $query->execute([$nombre, $precio, $descripcion, $id_categoria_fk]);

    return $db->lastInsertId();
}

function deleteProductById($id) {
    $db = getDB();
    $query = $db->prepare('DELETE FROM producto WHERE id = ?');
    $query->execute([$id]);
}
function modifyProductById($id, $nombre, $precio, $descripcion, $id_categoria_fk){
    $db = getDB();
    $query = $db->prepare("UPDATE producto SET (nombre = ?, precio = ?, descripcion = ?, id_categoria_fk = ?) WHERE producto.id = ?");
    $query->execute(array($nombre, $precio, $descripcion, $id_categoria_fk, $id));
}