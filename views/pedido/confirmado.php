<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'):?>

    <h1>Tu pedido se ha confirmado</h1>
    <p>Tu pedido ha sido guardado con exito, una vez que realices la tranferencia bancarioa con el coste del pedido, sera procesado y enviado.</p>
    <br>
    <h3>Datos del pedido</h3>
    <?php if(isset($pedido)):?>
        Numero del pedido: <?=$pedido->id?> <br>
        Total a pagar: <?=$pedido->coste?> <br>
        Productos: <br>
        <table>
        <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
        </tr>
        <?php while($product = $producto->fetch_object()): ?>
            <tr>
            <td>
                <?php if($product->imagen != null):?>
                    <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class='img_carrito' alt="Camiseta">
                <?php else: ?>
                    <img src="<?=base_url?>assets/img/camiseta.png" alt="" class='img_carrito'>
                <?php endif; ?>
            </td>

            <td>
                <a href="<?=base_url?>product/ver&id=<?=$product->id?>"><?=$product->nombre?></a>
            </td>
            <td><?=$product->precio?></td>
            <td><?=$product->unidades?></td>
        </tr>
        <?php endwhile;?>
        </table>
    <?php endif;?>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'):?>
    <h1>Tu pedido NO ha podido procesarse</h1>
<?php endif;?>