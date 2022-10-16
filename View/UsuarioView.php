<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class UsuarioView{
    private $smarty;

    function __construct($email) {
        $this->smarty = new Smarty();
        $this->smarty->assign('email',$email);
    }
    
    function showLogin($error=""){
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/userLogin.tpl');
    }

    function showUserCreate($error=""){
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/registroUsuario.tpl');
    }
    function showCreateLogin($error=""){
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/createUser.tpl');
    }
    function showHome(){
        header("Location: ".BASE_URL."list");
    }
    function showHomeCreate(){
        header("Location: ".BASE_URL."createUser");
    }
    function showUsersList($listaUsuarios){
        $this->smarty->assign('users', $listaUsuarios);
        $this->smarty->display('templates/usuarios.tpl');
    }

    function showHomeUsuarios(){
        header("Location: ".BASE_URL."usuarios");
    }

}