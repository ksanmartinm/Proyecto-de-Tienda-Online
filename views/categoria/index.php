<h1>Gestionar Categoria</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small"></a>

<table>
        <tr>
            <td>ID:</td>
            <td>NOMBRE:</td>
        </tr>
    <?php while($cat = $categorias->fetch_object()): ?>
        <tr>
            <td><?=$cat->id;?></td>
            <td><?=$cat->nombre;?></td>
        </tr>
    <?php endwhile;?>
</table>