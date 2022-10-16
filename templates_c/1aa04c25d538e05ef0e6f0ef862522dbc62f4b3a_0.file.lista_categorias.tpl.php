<?php
/* Smarty version 3.1.39, created on 2022-10-17 00:10:05
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\lista_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c813de36bc8_34858816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa04c25d538e05ef0e6f0ef862522dbc62f4b3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\lista_categorias.tpl',
      1 => 1665958203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c813de36bc8_34858816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="contenedor-general"> 
    <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
        <form action="add_category" method="POST" class="my-4">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label>Categoria</label>
                        <input name="category" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
    <?php }?>
        </br>
        <div class="content-top-page">
            <div class="content-title">
                <h1>Lista de Categorias</h1>
            </div>
        </div>

        <div class="main-table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th> 
                    <?php }?>    
                </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <tr>
                            <td scope="row"><a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" id="titulo-categoria"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a></td>
                            <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
                            <td>
                                <a class="btn btn-danger" href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" id="btn-categories-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['email']->value))) {?>
                            <td>
                                <a class="btn btn-success" href="updateCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" id="btn-categories-edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <?php }?>
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
