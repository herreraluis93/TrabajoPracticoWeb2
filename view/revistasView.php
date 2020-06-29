<div class="contenedorRevistas">
    REVISTAS
        <?php
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            foreach($revistas as $revista):
        ?>
        <div class="revista">
            <h1><?=$revista[6]?></h1>
            <p><?=$revista[7]?></p>
            <p><?=$revista[8]?></p>
            <img src="<?=base_url?>img/<?=$revista[10]?>">
        </div>
        <?php
            endforeach;
        ?>
    </div>
</div>

