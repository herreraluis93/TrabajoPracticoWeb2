<br/>
<br/>
<br/>
<br/>

<?php if(isset($_SESSION['noticiaHabilitada']) && $_SESSION['noticiaHabilitada'] == true): ?>
        <strong class="alertGreen">Noticia Habilitada</strong>
<?php elseif(isset($_SESSION['noticiaHabilitada']) && $_SESSION['noticiaHabilitada'] == false): ?>
        <strong class="alertRed">Noticia Habilitada</strong>
<?php endif; ?>
<?php Utils::borrarSesion('noticiaHabilitada'); ?>
<?php if(isset($_SESSION['noticiaDeshabilitada']) && $_SESSION['noticiaDeshabilitada'] == true): ?>
        <strong class="alertGreen">Noticia Deshabilitada</strong>
<?php elseif(isset($_SESSION['noticiaDeshabilitada']) && $_SESSION['noticiaDeshabilitada'] == false): ?>
        <strong class="alertRed">Noticia Deshabilitada</strong>
<?php endif; ?>
<?php Utils::borrarSesion('noticiaDeshabilitada'); ?>

<table style="width:100%">
  <tr>
    <th>ID_NOTICIA</th>
    <th>TITULO</th> 
    <th>CREADOR DE NOTICIA</th>
    <th>HABILITAR/DESHABILITAR</th>
  </tr>


<?php foreach($todasNoticias as $noticia): ?>

  <tr>
    <td><?=$noticia[0] ?></td>
    <td><?=$noticia[1] ?></td>
    <td><?=$noticia[2] ?>, <?=$noticia[3] ?></td>
    <?php if($noticia[4] == 1): ?> 
        <td>
            <form action="<?=base_url?>noticia/habilitarNoticia" method="POST">
            <input type="hidden" name="id_noticia" value="<?=$noticia[0]?>" /><br/>
            <input type="hidden" name="habilitado" value="0" /><br/>    
            <input type="submit" value="DESHABILITAR"/>
            </form>
        </td>
    <?php else: ?>
        <td>
            <form action="<?=base_url?>noticia/habilitarNoticia" method="POST">
            <input type="hidden" name="id_noticia" value="<?=$noticia[0]?>" /><br/>
            <input type="hidden" name="habilitado" value="1" /><br/>    
            <input type="submit" value="HABILITAR"/>
            </form>
        </td>
    <?php endif; ?>
  </tr>

<?php   endforeach; ?>

</table>
