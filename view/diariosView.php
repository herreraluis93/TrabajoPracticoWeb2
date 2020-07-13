<div class="contenedorNoticias">
<h1>Noticias de Diario</h1>
    <?php if(count($diarios) != 0): ?>
        <?php
            foreach($diarios as $diario):
        ?>
        <div class="revista" style="border-style:outset">
            <h1><?=$diario[1]?></h1><br>
            <p><?=$diario[2]?></p>
            <img src="<?=base_url?>img/<?=$diario[5]?>">
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
