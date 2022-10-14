{include file='templates/header.tpl'}
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
                <label> Categoria <select class="form_categoria" name="id_categoria_fk"id="id_categoria_fk">
                {foreach from=$categorias item=$categoria}
                <option value={$categoria->id}>{$categoria->nombre}</option>
                {/foreach}
                </select>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
{include file='templates/footer.tpl'}