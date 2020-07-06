<div class="contenedorHabilitar">
  <h2>HABILITAR SECCION</h2>
  <?php if(isset($_SESSION['seccionHabilitada']) && $_SESSION['seccionHabilitada'] == true): ?>
          <strong class="alertGreen">Sección Habilitada</strong>
  <?php elseif(isset($_SESSION['seccionHabilitada']) && $_SESSION['seccionHabilitada'] == false): ?>
          <strong class="alertRed">Sección no Habilitada</strong>
  <?php endif; ?>
  <?php Utils::borrarSesion('seccionHabilitada'); ?>
  <?php if(isset($_SESSION['seccionDeshabilitada']) && $_SESSION['seccionDeshabilitada'] == true): ?>
          <strong class="alertGreen">Seccion Deshabilitada</strong>
  <?php elseif(isset($_SESSION['seccionDeshabilitada']) && $_SESSION['seccionDeshabilitada'] == false): ?>
          <strong class="alertRed">Seccion no Deshabilitada</strong>
  <?php endif; ?>
  <?php Utils::borrarSesion('seccionDeshabilitada'); ?>

  <table style="width:70%">
    <tr>
      <th>ID_SECCION</th>
      <th>DESCRIPCIÓN</th> 
      <th>HABILITAR/DESHABILITAR</th>
    </tr>


  <?php foreach($todasSecciones as $seccion): ?>

    <tr>
      <td><?=$seccion[0] ?></td>
      <td><?=$seccion[1] ?></td>
      <?php if($seccion[2] == 1): ?> 
          <td>
              <form action="<?=base_url?>seccion/habilitarSeccion" method="POST">
                  <input type="hidden" name="id_seccion" value="<?=$seccion[0]?>" /><br/>
                  <input type="hidden" name="habilitado" value="0" /><br/>    
                  <input type="submit" value="DESHABILITAR"/>
              </form>
          </td>
      <?php else: ?>
          <td>
              <form action="<?=base_url?>seccion/habilitarSeccion" method="POST">
                  <input type="hidden" name="id_seccion" value="<?=$seccion[0]?>" /><br/>
                  <input type="hidden" name="habilitado" value="1" /><br/>    
                  <input type="submit" value="HABILITAR"/>
              </form>
          </td>
      <?php endif; ?>
    </tr>

  <?php   endforeach; ?>

  </table>
</div>