<div  class="fondoInicio">
    <img src="<?=base_url?>img/fondoCrear.jpg">
    <div class="contenedorInicio">
        <p>Bienvenido <?php echo $_SESSION['usuario']->nombre ?></p>
                 
        <a href="<?=base_url?>seccion/crearSeccion" >Crear Seccion</a>
        <a href="<?=base_url?>contenidista/crearNoticia" style="margin-left:120px">Crear Noticia</a><br><br>
        <a href="<?=base_url?>contenidista/crearPublicacion" >Crear Publicación</a>
        <a href="<?=base_url?>noticia/misNoticias" style="margin-left:70px">Mis noticias</a>
    </div>
</div>

