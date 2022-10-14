<?php

class ProductoModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda_natura;charset=utf8', 'root', '');
    }

    function getProducts(){
        $query = $this->db->prepare("SELECT * FROM producto");
        $query->execute();
    
        $products = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $products;
    }
    function insertProducts($nombre, $precio, $descripcion, $id_categoria_fk) {
        $query = $this->db->prepare("INSERT INTO producto (nombre, precio, descripcion, id_categoria_fk) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $precio, $descripcion, $id_categoria_fk]);
        
        return $this->db->lastInsertId();
    }
    function deleteProduct($id){
        $query = $this->db->prepare("DELETE FROM producto WHERE producto.id = ?");
        $query->execute(array($id));
    }
    function updateProduct($nombre, $precio, $descripcion, $id_categoria_fk){
        $query = $this->db->prepare("UPDATE producto SET (nombre, precio, descripcion, id_categoria_fk) WHERE producto.id=?");
        $query->execute(array($nombre, $precio, $descripcion, $id_categoria_fk));


        
    }
}