<?php
/* Smarty version 3.1.39, created on 2022-10-16 16:58:19
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\createUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c1c0ba527b9_95629245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb2a2c23cc698aad855886e1d3b2194a83fb1ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\createUser.tpl',
      1 => 1665932289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c1c0ba527b9_95629245 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>Login Libreria</title>
</head>

<body>
    <div class="contenedor-general-login">

        <div class="container-login colorDiv">

            <div class="title-login">
                <h2 class="tituloLogin">Registrarse</h2>
            </div>

            <div class="form-createLogin">
                <form class="form-alta" action="createUser" method="post">
                    <div class="input-login">
                        <input class="loginInput" placeholder="email@email.com" type="email" name="email" id="email"
                            required>
                    </div>
                    <div class="input-login">
                        <input class="loginInput" placeholder="Nombre y Apellido" type="text" name="nombre"
                            required>
                    </div>
                    <div class="input-login">
                        <input class="loginInput" placeholder="password" type="password" name="password" id="password"
                            required>
                    </div>
                    <div class="btn-form-login mtt-5">
                        <input type="submit" class=" btn btn-sm btn-primary" value="Create">
                        <div class="ml-5">
                            <a class="btn btn-secondary btn-sm btn-create-user" href="login">Cancel</a>
                        </div>

                    </div>
                </form>

            </div>

            <h4 class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>

        </div>

    </div>
</body>

</html><?php }
}
