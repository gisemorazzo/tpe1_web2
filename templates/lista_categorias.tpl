{include file='templates/header.tpl'}
    <div class="contenedor-general"> 
    {if isset($email)}
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
    {/if}
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
                    {if isset($email)}
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th> 
                    {/if}    
                </tr>
                </thead>
                <tbody>
                    {foreach from=$categorias item=$categoria}
                        <tr>
                            <td scope="row"><a href="categoria/{$categoria->id}" id="titulo-categoria">{$categoria->nombre}</a></td>
                            {if isset($email)}
                            <td>
                                <a class="btn btn-danger" href="deleteCategory/{$categoria->id}" id="btn-categories-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                            {/if}
                            {if isset($email)}
                            <td>
                                <a class="btn btn-success" href="updateCategory/{$categoria->id}" id="btn-categories-edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            {/if}
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
{include file='templates/footer.tpl'}
