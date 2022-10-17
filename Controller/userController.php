<?php

require_once "./Model/UsuarioModel.php";
require_once "./View/UsuarioView.php";
require_once "./helpers/authHelper.php";


class UserController{
    private $model;
    private $view;
    private $helper;

    function __construct(){
        $this->helper = new AuthHelpers();
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView($this->helper->getEmail());
    }
    function login(){
        $this->view->showLogin();
    }
    function getUserHeader(){
        $email= $this->model->getUsers();
        $user=$this->model->getUser($email);
        $this->view->showUser($user);
    }
    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getUser($email);
            if ($user  && password_verify($password, $user->password)) {
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["nombre"]=$user->nombre;
                $_SESSION["id"]=$user->id;
                $_SESSION["rol"]=$user->rol;
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }
    function logout(){
        session_destroy();
        $this->view->showLogin("Te Deslogeaste, gracias por tu trabajo");
    }
    function createUser(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])&&!empty($_POST['nombre'])){
            $userEmail=$_POST['email'];
            if(isset($userEmail) != $this->model->getUser($userEmail)){
                $userPassword=password_hash($_POST['password'],PASSWORD_BCRYPT) ;
                $userNombre=$_POST['nombre'];
                $this->model->insertUser($userEmail,$userPassword,$userNombre);
                $this->view->showLogin();
            }else{
                $this->view->showCreateLogin("El EMAIL ya existe");
            }
        }
    }
    function createLogin(){
        $this->view->showCreateLogin();  
    }
    function mostrarUsuarios(){
        $this->helper->checkLogin();
        $rol=$this->helper->getRol();
        if ($rol == "1" || $rol == "2") {
            $listaUsuarios = $this->model->getUsers();
            $this->view->showUsersList($listaUsuarios, $rol);
        } else {
            $this->view->showHome();
        }
    }
    function mostrarUsuario($email){
        $this->helper->checkLogin();
        $user = $this->model->getUser($email);
        $this->view->showUsuario($user);
    }
    function editarUsuario(){
        if (isset($_POST['nombre'],$_POST['tipoUser'],$_POST['email']) && !empty($_POST['nombre'] && !empty($_POST['rol']) && !empty($_POST['email']))) {
            $this->helper->checkLogin();
            $this->model->editUser($_POST['nombre'],$_POST['rol'],$_POST['email']);
            $this->mostrarUsuarios();
        } else{
            $this->mostrarUsuarios();
        } 
    }
    function deleteUsuario($id){
        $this->helper->checkLogin();
        $rol=$this->helper->getRol();
        if ($rol == "1" || $rol == "2") {
            $this->model->deleteUsuario($id);
            $this->view->showHomeUsuarios();
        } else {
            $this->view->showHome();
        }
    }
}
?>