{include file='templates/header.tpl'}
<form action="editCategory" method="POST" class="my-4">
    <div class="row">
        <input name="id" type="hidden" value="{$id}">
        <div class="col-9">
            <div class="form-group">
                <label>Categoria</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
{include file='templates/footer.tpl'}