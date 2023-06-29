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
    <a class="btn btn-primary pop" href="<?php echo router\url("photo", "afficher") ?>">Toutes les photos</a>
    <a class="btn btn-info pop" href="<?php echo router\url("photo", "ajouter", [$current_album['idAlb']]) ?>">Ajouter une photo</a>
    <a class="btn btn-danger pop" href="<?php echo router\url("corbeille", "afficher") ?>">Corbeille</a>
    <a class="btn btn-warning pop" href="<?php echo router\url("admin", "afficher") ?>">Espace Admin</a>
</div>