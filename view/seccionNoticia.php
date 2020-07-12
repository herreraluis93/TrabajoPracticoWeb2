<div class="contenedorRevistas">
    <?php if(count($noticias) != 0): ?>
        <?php
            foreach($noticias as $noticia):
        ?>
        <div class="revista">
            <h1><?=$noticia[1]?></h1>
            <p><?=$noticia[2]?></p>
            <img src="<?=base_url?>img/<?=$noticia[5]?>">
        </div>
        <br/>
        <br/>
        <br/>
        <?php
            endforeach;
        ?>
    <?php else: ?>
        <h3>No hay noticias disponibles</h3>
    <?php endif; ?>
    </div>
</div>
