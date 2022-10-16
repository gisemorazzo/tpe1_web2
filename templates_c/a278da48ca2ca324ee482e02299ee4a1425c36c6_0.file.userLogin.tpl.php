<?php
/* Smarty version 3.1.39, created on 2022-10-17 00:00:43
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\userLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c7f0b0daaa5_41974160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a278da48ca2ca324ee482e02299ee4a1425c36c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\userLogin.tpl',
      1 => 1665957081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c7f0b0daaa5_41974160 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylecss.css">

    <title>Login </title>
</head>

<body>
    <div class="contenedor-general-login">
        <div class="container-login colorDiv">
            <div class="logo-login">
            </div>
            <div class="title-login">
                <h2 class="tituloLogin">Loguearse</h2>
               

            <div class="form-login">
                <form class="form-alta" action="verify" method="post">
                   
                    <div class="inputs-form">
                        <div class="input-login">
                            <input class="email loginInput" placeholder="email" type="text" name="email" id="email@email.com"
                                required>
                        </div>
                        <div class="input-login">
                            <input class="password loginInput" placeholder="password" type="password" name="password"
                                id="password" required>
                        </div>
                    </div>
                    <div class="btn-form-login mtt-2">
                        <a class="btn btn-success btn-sm btn-create-user" href="createLogin">Registrarse</a>
                        <input type="submit" class="btn mll-3 btn-primary" value="Login">
                    </div>
                    <h4><span class="red-alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></h4>
                </form>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
