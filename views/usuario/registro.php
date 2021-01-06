<h1>Registrarse</h1>
<?php if(isset($_SESSION['registro']) && $_SESSION['registro'] == 'complete'): ?>
    <strong class="alert-green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['registro']) && $_SESSION['registro'] == 'failed'): ?>
    <strong class="alert-red">Registro fallido, indtroduce bien los datos</strong>
<?php endif;?>
<?php Utils::deleteSessions('registro');?>

<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>
    
    <label for="apellido">apellido</label>
    <input type="text" name="apellido" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <input type="submit" value="Registrarse">
</form>