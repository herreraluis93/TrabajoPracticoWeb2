<div class="contenedorHabilitar">
  <h2>EDITAR NOTICIA</h2>
    <form action="<?=base_url?>noticia/guardarCambios" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_noticia" value="<?=$miNoticia[0][0]?>" /><br/>
        <input type="hidden" name="imagenAnterior" value="<?=$miNoticia[0][5]?>" /><br/>
        
        <label>Título</label><br/>
        <input type="text" name="titulo" value="<?=$miNoticia[0][1]?>" size='<?php echo strlen($miNoticia[0][1])?>' required /><br/>
        
        <label>Texto</label><br/>
        <textarea name="texto" rows="10" cols="150" required><?=$miNoticia[0][2]?></textarea><br/>
        
        <label>Enlace</label><br/>
        <input type="text" name="enlace" value="<?=$miNoticia[0][3]?>" size='<?php echo strlen($miNoticia[0][3])?>' /><br/>
        
        <label>Georeferencia</label><br/>
        <input type="text" name="georeferencia" value="<?=$miNoticia[0][4]?>" size='<?php echo strlen($miNoticia[0][4])?>' required /><br/>
        
        <label for="imagenes">Cargar Imagen</label>
        <input type="file" name="imagen" ><br/><br/>

        <label for="tipoNoticia">Tipo noticia</label>
                <select name="tipoNoticia">
                    <option value="P">
                        Pago
                    </option>
                    <option value="G">
                        Gratuito
                    </option>
                </select><br/><br/>

        <select name="publicacion">
          <?php
            foreach($publicaciones as $publicacion):
          ?>
              <option value="<?=$publicacion[0] ?>">
                <?=$publicacion[2]?> Número:<?=$publicacion[4]?> - <?= $publicacion[3]?> 
              </option>
          <?php
            endforeach;
          ?>
        </select><br/><br/>

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
        </select><br/><br/>
        <input type="submit" value="Guardar Cambios"/>
    </form>
</div>