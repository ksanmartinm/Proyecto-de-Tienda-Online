<h1>Crear nuevo Productos</h1>
<div class="form_container">
<form action="<?=base_url?>producto/save" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="descripcion">Descripcion</label>
    <textarea name="descipcion"></textarea>

    <label for="precio">Precio</label>
    <input type="text" name="precio">

    <label for="stock">Stock</label>
    <input type="text" name="stock">

    <label for="categoria">Categoria</label>
    <?php $categorias = Utils::showCategorias(); ?>
    <select name="categoria">
        <?php while($cat = $categorias->fetch_object()): ?>
            <option value="<?= $cat->id ?>">
                <?=$cat->nombre?>
            </option>    
        <?php endwhile; ?>
    </select>

    <label for="imagen">Imagen</label>
    <input type="file" name="imagen">

    <input type="submit" value="Guardar">
</form>
</div>
