<?php
/* Smarty version 3.1.39, created on 2022-10-17 01:29:11
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\editar_categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c93c7aaf445_00579001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7a816333d27a0c575977dee995e8f46c611070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\editar_categoria.tpl',
      1 => 1665962949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c93c7aaf445_00579001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editCategory" method="POST" class="my-4">
    <div class="row">
        <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <div class="col-9">
            <div class="form-group">
                <label>Categoria</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
