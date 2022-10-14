<?php

class userModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_users;charset=utf8', 'root', '');
    }

    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function insertUser($email,$password,$rol){
        $query = $this->db->prepare('INSERT INTO users (email, password,rol) VALUES (?,?,?)');
        $query->execute([$email,$password,$rol]);
        return $this->db->lastInsertId();
    }

    function deleteUsuario($email){
        $query = $this->db->prepare('DELETE FROM users WHERE users.email = ?');
        $query->execute(array($email));
    }

    // funcion administrador para editar usuario 
    function editarTipoUser($email){
        $sentencia = $this->db->prepare("UPDATE users SET email=?");
        $sentencia->execute($email);
    }
    
    function editUser($email,$password,$rol){
        $sentencia = $this->db->prepare("UPDATE users SET email=?,passwprdr=? WHERE rol = ?");
        $sentencia->execute(array($email,$password,$rol));
    }
}