<div  class="fondoInicio">
    <img src="<?=base_url?>img/fondoCrear.jpg">
    <div class="contenedorInicio">
        <p>Bienvenido <?php echo $_SESSION['usuario']->nombre ?></p>
                 
             <a href="<?=base_url?>publicacion/habilitar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Habilitar Publicación</a>
            <a href="<?=base_url?>noticia/habilitar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Habilitar Noticia</a>
            <a href="<?=base_url?>seccion/habilitar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Habilitar Sección</a>
            
    </div>
</div>