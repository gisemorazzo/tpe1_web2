<?php
/* Smarty version 3.1.39, created on 2022-10-17 01:07:29
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\userLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c8eb10761e7_34698108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a278da48ca2ca324ee482e02299ee4a1425c36c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\userLogin.tpl',
      1 => 1665961647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634c8eb10761e7_34698108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedor-general-login">
        <div class="container-login colorDiv">

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
                        <input type="submit" class=" btn btn-sm btn-primary" value="Login">
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
