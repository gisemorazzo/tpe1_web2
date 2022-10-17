{include file='templates/header.tpl'}
    <div class="contenedor-general">
     {if isset($email)}
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
                        <label> Categoria<br> 
                        <select class="form_categoria" name="id_categoria_fk"id="id_categoria_fk">
                        {foreach from=$categorias item=$categoria}
                            <option value={$categoria->id}>{$categoria->nombre}</option>
                        {/foreach}
                        </select>
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
     {/if}
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
                    {if isset($email)}
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th>  
                    {/if}   
                </tr>
                </thead>
                <tbody>
                    {foreach from=$productos item=$producto}
                        <tr>
                            <td scope="row"><a href="detalle_producto/{$producto->id}" id="titulo-producto">{$producto->nombre}</a></td>
                            <td id="precio-producto">${$producto->precio}</td>
                            <td id="descripcion-producto">{$producto->descripcion}</td>
                            <td id="categoria-producto">{$producto->id_categoria_fk}</td>
                            <td>
                            {if isset($email)}
                                <a class="btn btn-danger" href="deleteProduct/{$producto->id}" id="btn-product-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                            {/if}
                            {if isset($email)}
                            <td>
                                <a class="btn btn-success" href="updateProduct/{$producto->id}" id="btn-product-edit">
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