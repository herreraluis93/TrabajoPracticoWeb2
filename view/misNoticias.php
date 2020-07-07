<div class="contenedorHabilitar">
  <h2>MIS NOTICIAS</h2>

<table style="width:70%;">
  <tr>
    <th>TÍTULO</th>
    <th>TIPO PUBLICACIÓN</th> 
    <th>FECHA PUBLICACIÓN</th>
    <th>NÚMERO PUBLICACIÓN</th>
    <th>SECCIÓN</th>
    <th>NOTICIA HABILITADA/DESHABILITADA</th>
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
  </tr>

<?php   endforeach; ?>

</table>
</div>