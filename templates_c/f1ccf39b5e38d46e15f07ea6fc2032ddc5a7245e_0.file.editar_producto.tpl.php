<?php
/* Smarty version 3.1.39, created on 2022-10-05 00:11:52
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\editar_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_633cafa8949792_31498372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1ccf39b5e38d46e15f07ea6fc2032ddc5a7245e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\editar_producto.tpl',
      1 => 1664921044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633cafa8949792_31498372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de alta de productos -->
<form action="editProduct" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Producto</label>
                <input name="product" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input name="price" type="number" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="category" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
