<?php if(isset($_SESSION['identity'])):?>
<h1>hacer pedido</h1>

    <h3>Direccion para el envio</h3>
    <form action="<?=base_url.'pedido/add'?>" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia">
        <label for="provincia">Ciudad</label>
        <input type="text" name="localidad">
        <label for="provincia">Direccion</label>
        <input type="text" name="direccion">
        <input type="submit" value="Confirmar">
    </form>

<a href="<?=base_url?>carrito/index">Ver los productos y el precio del pedido</a>
<?php else:?>
    <h1>Necesitas estar indentificado</h1>
    <p>Necesitas estar logueado en la web para poder realizar tu pedido.</p>
<?php endif;?>
