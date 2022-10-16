{include file='templates/header.tpl'}
    <div class="nombre">
        <h4>Producto:</h4> 
        <p>{$producto->nombre}</p>
    </div>  
    <div class="categoria">
        <h4>Categoria:</h4>
        <p>{$producto->nombre_categoria}</p>
    </div> 
    <div class="precio">
        <h4>Precio:</h4>
        <p>{$producto->precio}</p>
    </div> 
    <div class="descripcion">
        <h4>Descripcion:</h4>
        <p>{$producto->descripcion}</p>
    </div>       
{include file='templates/footer.tpl'}