<div  class="fondoInicio">
<img src="<?=base_url?>img/fondoCrear.jpg">
<div class="contenedorNoticia">
  <h2>EDITAR NOTICIA</h2>
    <form action="<?=base_url?>noticia/guardarCambios" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_noticia" value="<?=$miNoticia[0][0]?>" />
        <input type="hidden" name="imagenAnterior" value="<?=$miNoticia[0][5]?>" />
        
        <label>Título</label><br/>
        <input type="text" name="titulo" value="<?=$miNoticia[0][1]?>" size='<?php echo strlen($miNoticia[0][1])?>' required /><br/>
        
        <label>Texto</label><br/>
        <textarea name="texto" rows="10" cols="150" required><?=$miNoticia[0][2]?></textarea><br/>
        
        <label style="padding-right:150px">Enlace</label> 
        <label style="padding-right:150px">Georeferencia</label>
        <label style="padding-right:100px" for="tipoNoticia">Tipo noticia</label>
        <label  for="tipoSeccion">Seccion</label><br/>

        <input type="text" name="enlace" value="<?=$miNoticia[0][3]?>" size='<?php echo strlen($miNoticia[0][3])?>' />
        <input style="margin-left:108px" type="text" name="georeferencia" value="<?=$miNoticia[0][4]?>" size='<?php echo strlen($miNoticia[0][4])?>' required />
        <select style="margin-left:110px;margin-right:97px" name="tipoNoticia">
                    <option value="P">
                        Pago
                    </option>
                    <option value="G">
                        Gratuito
                    </option>
        </select>
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
        </select><br><br>

        <label for="imagenes">Cargar Imagen</label>
        <input type="file" name="imagen" ><br/><br/>
                
        <select style="margin-right:350px" name="publicacion">
          <?php
            foreach($publicaciones as $publicacion):
          ?>
              <option value="<?=$publicacion[0] ?>">
                <?=$publicacion[2]?> Número:<?=$publicacion[4]?> - <?= $publicacion[3]?> 
              </option>
          <?php
            endforeach;
          ?>
        </select>

        <input class="btnGuardarEdicion" type="submit" value="Guardar Cambios"/>
    </form>
</div>
</div>