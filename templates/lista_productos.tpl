{include file='templates/header.tpl'}
    <div class="contenedor-general"> 
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
                    {foreach from=$productos item=$producto}
                        <tr>
                            <td scope="row"><a href="libro/{$producto->id}" id="titulo-producto">{$producto->nombre}</a></td>
                            <td id="precio-producto">{$producto->precio}</td>
                            <td id="descripcion-producto">{$producto->descripcion}</td>
                            <td id="categoria-producto">${$producto->id_category_fk}</td>
                            <td>
                                <a class="btn btn-danger" href="deleteLibro/{$product->id}" id="btn-product-delete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="libro/editar/{$product->id}" id="btn-product-edit">
                                    <i class="far fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
{include file='templates/footer.tpl'}
