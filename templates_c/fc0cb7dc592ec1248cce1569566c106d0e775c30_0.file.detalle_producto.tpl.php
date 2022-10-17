<?php
/* Smarty version 3.1.39, created on 2022-10-17 01:13:35
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\detalle_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c901f539514_21320094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc0cb7dc592ec1248cce1569566c106d0e775c30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\detalle_producto.tpl',
      1 => 1665962012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c901f539514_21320094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor-general">
    <div class="nombre">
        <h4>Producto:</h4> 
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</p>
    </div>  
    <div class="categoria">
        <h4>Categoria:</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</p>
    </div> 
    <div class="precio">
        <h4>Precio:</h4>
        <p>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
    </div> 
    <div class="descripcion">
        <h4>Descripcion:</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
    </div>       
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
