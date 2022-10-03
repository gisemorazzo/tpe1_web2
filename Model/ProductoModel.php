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
}