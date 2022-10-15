{include file='templates/header.tpl'}
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label> Filtrar <select class="form_categoria" name="id_categoria_fk"id="id_categoria_fk">
            {foreach from=$categorias item=$categoria}
               <option value={$categoria->id}>{$categoria->nombre}</option>
             {/foreach}
            </select>
            </label>
        </div>
    </div>
</div>

{include file='templates/footer.tpl'}