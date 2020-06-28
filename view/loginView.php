


    <?php if(isset($_SESSION['errorLogin'])): ?>
        <strong class="alertRed">Usuario y/o contraseña inválido</strong>
    <?php endif; ?>
    <?php Utils::borrarSesion('errorLogin') ?>


<div class="contenedorImagenIngresar">
    bjbkjj
</div>

<div class="contenedorFormulario">
<h1>Iniciar Sesión</h1>
    <form action="<?=base_url?>usuario/validarLogin" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" required/><br/>

        <label for="password">Contraseña</label>
        <input type="password" name="password" required/></br>

        <input type="submit" value="Iniciar Sesión"/>
    </form>
</div>
