<div class="contenedorRevistas">
        <?php
            foreach($revistas as $revista):
        ?>
        <div class="revista">
            <h1><?=$revista[1]?></h1>
            <p><?=$revista[2]?></p>
            <p><?=$revista[4]?></p>
            <img src="<?=base_url?>img/<?=$revista[5]?>">
        </div>
        <?php
            endforeach;
        ?>
    </div>
</div>

