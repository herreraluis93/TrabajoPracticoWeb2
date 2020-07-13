<div class="fondoSeccion">
    <img src="<?=base_url?>img/fondoCrear.jpg">
    <div class="contenedorSeccion">
        <h3>Secciones existentes</h3>
        <?php if(isset($_SESSION['seccionCreada']) && $_SESSION['seccionCreada'] == true): ?>
            <strong class="alertGreen">Sección guardada correctamente</strong>
        <?php elseif(isset($_SESSION['seccionCreada']) && $_SESSION['seccionCreada'] == false): ?>
            <strong class="alertRed">Sección no guardada</strong>
        <?php endif; ?>
        <?php Utils::borrarSesion('seccionCreada'); ?>
        <?php
    foreach($secciones as $seccion):
?>
    <p value="<?=$seccion[0] ?>">
        <?=$seccion[1]?>
    </p>
<?php
    endforeach;
?>
        <form action="<?=base_url?>seccion/guardarSeccion" method="POST" >
            <label for="seccion">Nueva Sección</label>
            <input type="text" name=seccion required/><br/>

            <br/>
            <input class="btnGuardarEdicion" type="submit" value="Guardar nueva sección"/>
        </form>
    </div>
</div>