{include file='templates/header.tpl'}
    <div class="contenedor-general"> 
        {if !$productos}
            No hay productos para esta categoria.
        {else}
        <div class="content-top-page">
            <div class="content-title">
                <h1>Productos por categoria</h1>
            </div>
        </div>

        <div class="main-table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                </tr>
                </thead>
                <tbody>
                    {foreach from=$productos item=$producto}
                        <tr>
                            <td id="nombre-producto">{$producto->nombre}</td>
                            <td id="precio-producto">${$producto->precio}</td>
                            <td id="descripcion-producto">{$producto->descripcion}</td>
                        </tr>
                    {/foreach}
                    
                </tbody>
            </table>
        </div>
    </div>
    {/if}
{include file='templates/footer.tpl'}