<br/>
<br/>
<br/>
<?php if(isset($_SESSION['seccionCreada']) && $_SESSION['seccionCreada'] == true): ?>
        <strong class="alertGreen">Sección guardada correctamente</strong>
    <?php elseif(isset($_SESSION['seccionCreada']) && $_SESSION['seccionCreada'] == false): ?>
        <strong class="alertRed">Sección no guardada</strong>
    <?php endif; ?>
<?php Utils::borrarSesion('seccionCreada'); ?>


<h3>Secciones existentes</h3>

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
    <input type="submit" value="Guardar nueva sección"/>
</form>