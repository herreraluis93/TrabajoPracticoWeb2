<div class="contenedorNoticias">
    <?php if(count($noticias) != 0): ?>
        <?php
            foreach($noticias as $noticia):
        ?>
        <div class="revista" style="border-style:outset">
            <h1><?=$noticia[1]?></h1>
            <p><?=$noticia[2]?></p>
            <img src="<?=base_url?>img/<?=$noticia[5]?>">
        </div>
        <p style="font-size:40px; text-align:center;" >:::::::::::::::::::::::::::::::::::::::::::::::::</p>
        <?php
            endforeach;
        ?>
    <?php else: ?>
        <h3>No hay noticias disponibles</h3>
    <?php endif; ?>
    </div>
</div>
