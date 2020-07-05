<div  class="fondoInicio">
    <img src="<?=base_url?>img/fondoCrear.jpg">
    <div class="contenedorInicio">
        <p>Bienvenido <?php echo $_SESSION['usuario']->nombre ?></p>
                 
            <a href="<?=base_url?>seccion/crearSeccion" class="w3-bar-item w3-button w3-padding-large">Crear Seccion</a>
            <a href="<?=base_url?>contenidista/crearNoticia" class="w3-bar-item w3-button w3-padding-large">Crear Noticia</a>
            <a href="<?=base_url?>contenidista/crearPublicacion" class="w3-bar-item w3-button w3-padding-large">Crear Publicación</a>
            <a href="<?=base_url?>contenidista/misNoticias" class="w3-bar-item w3-button w3-padding-large">Mis noticias</a>
    </div>
</div>

