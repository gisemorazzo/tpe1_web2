<?php
/* Smarty version 3.1.39, created on 2022-10-14 22:10:53
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\lista_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6349c24d635f45_51609625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '841c15e33b40fb0b27e5c85758005a4be8cb09c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\lista_productos.tpl',
      1 => 1665778251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349c24d635f45_51609625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedor-general"> 
     <!-- formulario de alta de Producto -->
     <form action="add_products" method="POST" class="my-4">
     <div class="row">
         <div class="col-9">
             <div class="form-group">
                 <label>Nombre</label>
                 <input name="nombre" type="text" class="form-control">
                 <label>Precio</label>
                 <input name="precio" type="number" class="form-control">
                 <label>Descripcion</label>
                 <input name="descripcion" type="text" class="form-control">
                 <label> Categoria <select class="form_categoria" name="id_categoria_fk"id="id_categoria_fk">
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
     <button type="submit" class="btn btn-primary mt-2">Guardar</button>
 </form>
 </br>
        <div class="content-top-page">
            <div class="content-title">
                <h1>Lista de Productos</h1>
            </div>
        </div>

        <div class="main-table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th>     
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
                            <td scope="row"><a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" id="titulo-producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a></td>
                            <td id="precio-producto">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                            <td id="descripcion-producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                            <td id="categoria-producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria_fk;?>
</td>
                            <td>
                                <a class="btn btn-danger" href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" id="btn-product-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="updateProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" id="btn-product-edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
