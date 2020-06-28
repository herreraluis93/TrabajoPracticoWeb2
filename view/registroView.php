<div class="contenedorRegistro">
    <a href="<?=base_url?>usuario/index"> 
            <img src="<?=base_url?>img/back-button.png">
    </a>    
    <h1>Registrarse</h1>


    <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'Completo'): ?>
        <strong class="alertGreen">Registro guardado correctamente</strong>
    <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'Fallo'): ?>
        <strong class="alertRed">Registro no guardado, Introduce correctamente los datos</strong>
    <?php endif; ?>
    <?php Utils::borrarSesion('register'); ?>


    <form action="<?=base_url?>usuario/guardar" method="POST">
        <label for="nombre">Nombre</label></br>
        <input type="text" name="nombre" required/>

        <label for="apellido">Apellido</label><br/>
        <input type="text" name="apellido" required/>

        <label for="email">Email</label><br/>
        <input type="email" name="email" required/>

        <label for="password">Contraseña</label></br>
        <input type="password" name="password" required/>

        <button type="submit" value="Registrarse"> </button>
    </form>
</div>