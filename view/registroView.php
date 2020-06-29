<div class="contenedorRegistro">
    <a href="<?=base_url?>usuario/login"> 
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
        <label for="nombre">Nombre</label>
        <label for="apellido" class="labelApellido">Apellido</label></br>

        <input type="text" name="nombre" required/>
        <input type="text" name="apellido" required/> </br>

        <label for="email">Email</label>
        <label for="password" class="labelPass">Contraseña</label></br>

        <input type="email" name="email" required/>
        <input type="password" name="password" required/></br>

        <button type="submit"> Registrarse </button>
    </form>
</div>