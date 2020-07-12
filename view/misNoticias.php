<div class="contenedorHabilitar">
<?php if(isset($_SESSION['noticiaEditada']) && $_SESSION['noticiaEditada'] == true): ?>
      <strong class="alertGreen">Noticia editada correctamente</strong>
<?php elseif(isset($_SESSION['noticiaEditada']) && $_SESSION['noticiaEditada'] == false): ?>
      <strong class="alertRed">Noticia no editada correctamente</strong>
<?php elseif(isset($_SESSION['errorImagen'])): ?>
      <strong class="alertRed">Nombre de imagen ya existe</strong>
<?php endif; ?>
<?php
  Utils::borrarSesion('noticiaEditada');
  Utils::borrarSesion('errorImagen');
?>
  <h2>MIS NOTICIAS</h2>

<table style="width:70%;">
  <tr>
    <th>TÍTULO</th>
    <th>TIPO PUBLICACIÓN</th> 
    <th>FECHA PUBLICACIÓN</th>
    <th>NÚMERO PUBLICACIÓN</th>
    <th>SECCIÓN</th>
    <th>NOTICIA HABILITADA/DESHABILITADA</th>
    <th>EDITAR</th>
  </tr>


<?php foreach($misNoticias as $noticia): ?>

  <tr>
    <td><?=$noticia[0] ?></td>
    <td><?=$noticia[1] ?></td>
    <td><?=$noticia[2] ?></td>
    <td><?=$noticia[3] ?></td>
    <td><?=$noticia[4] ?></td>
    <?php if($noticia[5] == 1): ?> 
        <td>HABILITADA</td>
    <?php else: ?>
        <td>DESHABILITADA</td>
    <?php endif; ?>
    <td>
      <form action="<?=base_url?>noticia/editarNoticia" method="POST">
        <input type="hidden" name="id_noticia" value="<?=$noticia[6]?>" /><br/>
         <input type="submit" value="Editar Noticia"/>
      </form>
    </td>
  </tr>

<?php   endforeach; ?>

</table>
</div>