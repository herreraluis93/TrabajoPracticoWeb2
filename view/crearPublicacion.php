<div class="fondoPublicacion">
    
<img src="<?=base_url?>img/fondoCrear.jpg">
    <div class="contenedorPublicacion">
        <h1>Crear Publicación</h1>
        <?php if(isset($_SESSION['publicacionCreada']) && $_SESSION['publicacionCreada'] == true): ?>
            <strong class="alertGreen">Publicación guardada correctamente</strong>
        <?php elseif(isset($_SESSION['publicacionCreada']) && $_SESSION['publicacionCreada'] == false): ?>
            <strong class="alertRed">Publicación no guardada</strong>
        <?php endif; ?>
        <?php Utils::borrarSesion('publicacionCreada'); ?>

        <form action="<?=base_url?>contenidista/guardarPublicacion" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required/><br/>

            <label for="tipoPublicacion">Tipo publicación</label>
            <select name="tipoPublicacion">
                <option value="Diario">
                    Diario
                </option>
                <option value="Revista">
                    Revista
                </option>
            </select>
            <br/>

            <label for="fecha">Fecha Publicación</label>
            <input type="date" name="fecha" required/><br/>

            <label for="numero">Numero</label>
            <input type="number" name="numero" required/><br/>

            <input type="submit" value="Crear Publicación"/>
        </form>
    </div>
    </div>