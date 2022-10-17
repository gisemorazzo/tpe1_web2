<?php
/* Smarty version 3.1.39, created on 2022-10-17 01:06:53
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\createUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c8e8db8e624_02061776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb2a2c23cc698aad855886e1d3b2194a83fb1ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\createUser.tpl',
      1 => 1665961612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634c8e8db8e624_02061776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                    <div class="btn-form-login mtt-2">
                        <input type="submit" class=" btn btn-sm btn-primary" value="Create">
                        <a class="btn btn-secondary btn-sm btn-create-user" href="login">Cancel</a>
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
