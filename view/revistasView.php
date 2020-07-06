<div class="contenedorRevistas">
    <?php if(count($revistas) != 0): ?>
        <?php
            foreach($revistas as $revista):
        ?>
        <div class="revista">
            <h1><?=$revista[1]?></h1>
            <p><?=$revista[2]?></p>
            <img src="<?=base_url?>img/<?=$revista[5]?>" />
        </div>
        <br/>
        <br/>
        <br/>
        <?php
            endforeach;
        ?>
    <?php else: ?>
        <h3>No hay revistas disponibles</h3>
    <?php endif; ?>
    </div>
</div>

