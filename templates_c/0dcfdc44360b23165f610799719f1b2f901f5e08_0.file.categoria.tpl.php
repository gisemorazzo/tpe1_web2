<?php
/* Smarty version 3.1.39, created on 2022-10-15 20:40:45
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634afead2e72b0_54845128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dcfdc44360b23165f610799719f1b2f901f5e08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\categoria.tpl',
      1 => 1665859241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634afead2e72b0_54845128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedor-general"> 
        <?php if (!$_smarty_tpl->tpl_vars['productos']->value) {?>
            "No hay productos para esta categoria."
        <?php } else { ?>
        <div class="content-top-page">
            <div class="content-title">
                <h1>Productos por categoria</h1>
            </div>
        </div>

        <div class="main-table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                        <tr>
                            <td id="nombre-producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                            <td id="precio-producto">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                            <td id="descripcion-producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <?php }
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
