<div class="contenedorHabilitar">
  <h2>HABILITAR PUBLICACION</h2>
  <?php if(isset($_SESSION['publicacionHabilitada']) && $_SESSION['publicacionHabilitada'] == true): ?>
          <strong class="alertGreen">Publicación Habilitada</strong>
  <?php elseif(isset($_SESSION['publicacionHabilitada']) && $_SESSION['publicacionHabilitada'] == false): ?>
          <strong class="alertRed">Publicación no Habilitada</strong>
  <?php endif; ?>
  <?php Utils::borrarSesion('publicacionHabilitada'); ?>
  <?php if(isset($_SESSION['publicacionDeshabilitada']) && $_SESSION['publicacionDeshabilitada'] == true): ?>
          <strong class="alertGreen">Publicación Deshabilitada</strong>
  <?php elseif(isset($_SESSION['publicacionDeshabilitada']) && $_SESSION['publicacionDeshabilitada'] == false): ?>
          <strong class="alertRed">Publicación no Deshabilitada</strong>
  <?php endif; ?>
  <?php Utils::borrarSesion('publicacionDeshabilitada'); ?>
<table style="width:70%">
  <tr>
    <th>TIPO</th>
    <th>FECHA</th>
    <th>NÚMERO</th> 
    <th>HABILITAR/DESHABILITAR</th>
  </tr>


<?php foreach($todasPublicaciones as $publicacion): ?>

  <tr>
    <td><?=$publicacion[2] ?></td>
    <td><?=$publicacion[3] ?></td>
    <td><?=$publicacion[4] ?></td>
    <?php if($publicacion[5] == 1): ?> 
        <td>
            <form action="<?=base_url?>publicacion/habilitarPublicacion" method="POST">
                <input type="hidden" name="id_publicacion" value="<?=$publicacion[0]?>" /><br/>
                <input type="hidden" name="habilitado" value="0" /><br/>    
                <input type="submit" value="DESHABILITAR"/>
            </form>
        </td>
    <?php else: ?>
        <td>
            <form action="<?=base_url?>publicacion/habilitarPublicacion" method="POST">
                <input type="hidden" name="id_publicacion" value="<?=$publicacion[0]?>" /><br/>
                <input type="hidden" name="habilitado" value="1" /><br/>    
                <input type="submit" value="HABILITAR"/>
            </form>
        </td>
    <?php endif; ?>
  </tr>
<?php   endforeach; ?>
</table>
    </div>