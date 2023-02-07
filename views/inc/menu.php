<?php



?>
<span id="burger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</span>
<div id="menu" class="hideMenu"> <?php
    foreach ($albums as $album) {
        echo '<a class="btn btn-primary pop" href="'.router\url("album", "afficher", [$album['idAlb']]).'">'.$album['nomAlb'].'</a>';
    }
    ?>
</div>