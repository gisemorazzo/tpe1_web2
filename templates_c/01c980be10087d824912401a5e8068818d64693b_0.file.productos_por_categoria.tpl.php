<?php
/* Smarty version 3.1.39, created on 2022-10-15 03:36:40
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\productos_por_categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634a0ea8e90a26_59556392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c980be10087d824912401a5e8068818d64693b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\productos_por_categoria.tpl',
      1 => 1665797797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634a0ea8e90a26_59556392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label> Filtrar <select class="form_categoria" name="id_categoria_fk"id="id_categoria_fk">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
               <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </label>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
