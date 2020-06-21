<h1>Crear Noticia</h1>


    <?php if(isset($_SESSION['noticiaCreada']) && $_SESSION['noticiaCreada'] == true): ?>
        <strong class="alertGreen">Noticia guardada correctamente</strong>
    <?php elseif(isset($_SESSION['noticiaCreada']) && $_SESSION['noticiaCreada'] == false): ?>
        <strong class="alertRed">Noticia no guardada</strong>
    <?php endif; ?>
    <?php Utils::borrarSesion('noticiaCreada'); ?>


<form action="<?=base_url?>contenidista/guardarNoticia" method="POST">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" required/><br/>

    <label for="texto">Texto</label>
    <input type="text" name="texto" required/><br/>

    <label for="enlace">Enlace</label>
    <input type="text" name="enlace" required/><br/>

    <label for="georeferencia">Georeferencia</label>
    <input type="text" name="georeferencia" required/></br>

    <select name="seccion">
    <?php
        foreach($secciones as $seccion):
    ?>
        <option value="<?=$seccion[0] ?>">
            <?=$seccion[1]?>
        </option>
    <?php
        endforeach;
    ?>
    </select>
    <br/>
    <select name="publicacion">
    <?php
        foreach($publicaciones as $publicacion):
    ?>
        <option value="<?=$publicacion[0] ?>">
            <?=$publicacion[1]?> Número:<?=$publicacion[4]?> - <?= $publicacion[3]?> 
        </option>
    <?php
        endforeach;
    ?>
    </select>
    
    <br/>
    <input type="submit" value="Crear Noticia"/>
</form>