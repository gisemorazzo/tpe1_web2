<?php

class CategoriaModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tienda_natura;charset=utf8', 'root', '');
    }

    function getCategories(){
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();
    
        $categories = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $categories;
    }
    function insertCategory($nombre){
        $query = $this->db->prepare("INSERT INTO categoria (nombre) VALUES (?)");
        $query->execute(array($nombre));

        return $this->db->lastInsertId();
    }
    function deleteCategory($id){
        $query = $this->db->prepare("DELETE FROM categoria WHERE categoria.id = ?");
        $query->execute(array($id));
    }
    function updateCategory($nombre){
        $query = $this->db->prepare("UPDATE categoria SET (categoria=?) WHERE categoria.id = ?");
        $query->execute(array($nombre));

    }
    function getProductsByCategory($id){
        $query = $this->db->prepare( "SELECT * FROM producto WHERE id_categoria_fk = ?");
        $query->execute(array($id));
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    
}