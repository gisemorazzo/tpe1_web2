<?php
/* Smarty version 3.1.39, created on 2022-10-05 01:12:07
  from 'C:\xampp\htdocs\web2\tpe_1_web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_633cbdc7238381_29951156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '574555dfc5e1273e1936479894920914aab32866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe_1_web2\\templates\\header.tpl',
      1 => 1664925102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633cbdc7238381_29951156 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="https://use.fontawesome.com/0ce93c344c.js"><?php echo '</script'; ?>
>
    <title>Tienda Natura</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">Tienda Natura</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="list">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="list_categories">Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout">Cerrar sesión</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">
<?php }
}
