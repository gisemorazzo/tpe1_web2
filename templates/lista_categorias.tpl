{include file='templates/header.tpl'}
    <div class="contenedor-general"> 
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
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th>     
                </tr>
                </thead>
                <tbody>
                    {foreach from=$categorias item=$categoria}
                        <tr>
                            <td scope="row"><a href="libro/{$categoria->id}" id="titulo-categoria">{$categoria->nombre}</a></td>
                            <td>
                                <a class="btn btn-danger" href="deleteProduct/{$categoria->id}" id="btn-product-delete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="updateProduct/{$categoria->id}" id="btn-product-edit">
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
