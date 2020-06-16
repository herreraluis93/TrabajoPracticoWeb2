<h1>Registrarse</h1>


    <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'Completo'): ?>
        <strong class="alertGreen">Registro guardado correctamente</strong>
    <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'Fallo'): ?>
        <strong class="alertRed">Registro no guardado, Introduce correctamente los datos</strong>
    <?php endif; ?>
    <?php Utils::borrarSesion('register'); ?>


<form action="<?=base_url?>usuario/guardar" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required/><br/>

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" required/><br/>

    <label for="email">Email</label>
    <input type="email" name="email" required/><br/>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required/></br>

    <input type="submit" value="Registrarse"/>
</form>