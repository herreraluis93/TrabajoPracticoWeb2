


    <?php if(isset($_SESSION['errorLogin'])): ?>
        <strong class="alertRed">Usuario y/o contraseña inválido</strong>
    <?php endif; ?>
    <?php Utils::borrarSesion('errorLogin') ?>


<div class="contenedorImagenIngresar">
    <img src="<?=base_url?>img/login.jpg">
</div>

<div class="contenedorFormulario">
    <a href="<?=base_url?>usuario/index"> 
        <img src="<?=base_url?>img/back-button.png">
    </a>
    <h1>Iniciar Sesión</h1>
    <form action="<?=base_url?>usuario/validarLogin" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" required/><br/>

        <label for="password">Contraseña</label>
        <input type="password" name="password" required/></br>
        <a href="">Olvide mi contraseña</a></br>

        <input type="submit" value="Iniciar Sesión"/>
    </form>
    <a href="<?=base_url?>usuario/registrar">Registrarme</a></br>
    

</div>
