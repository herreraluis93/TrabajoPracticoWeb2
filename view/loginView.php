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
        <label for="email">Email</label><br>
        <input type="text" name="email" required/><br/>

        <label for="password">Contraseña</label><br>
        <input type="password" name="password" required/></br>

        <button type="submit">Iniciar Sesión </button>
    </form>
    <a href="<?=base_url?>usuario/registrar" class="linkRegistro">REGISTRARME</a></br>
    

</div>
