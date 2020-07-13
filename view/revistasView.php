<div class="contenedorNoticias">
<h1>Noticias de Revistas</h1>
    <?php if(count($revistas) != 0): ?>
        <?php
            foreach($revistas as $revista):
        ?>
        <div class="revista" style="border-style:outset">
            <h1><?=$revista[1]?></h1><br>
            <p><?=$revista[2]?></p>
            <img src="<?=base_url?>img/<?=$revista[5]?>" />
        </div>
        <p style="font-size:40px; text-align:center;" >:::::::::::::::::::::::::::::::::::::::::::::::::</p>
        <?php
            endforeach;
        ?>
    <?php else: ?>
        <h3>No hay revistas disponibles</h3>
    <?php endif; ?>
    </div>
</div>

