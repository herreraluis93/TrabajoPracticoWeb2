<div class="contenedorRevistas">
    <?php if(count($diarios) != 0): ?>
        <?php
            foreach($diarios as $diario):
        ?>
        <div class="revista">
            <h1><?=$diario[1]?></h1>
            <p><?=$diario[2]?></p>
            <p><?=$diario[4]?></p>
            <img src="<?=base_url?>img/<?=$diario[5]?>">
        </div>
        <?php
            endforeach;
        ?>
    <?php else: ?>
        <h3>No hay revistas disponibles</h3>
    <?php endif; ?>
    </div>
</div>
