<?php

include("inc/header.php");

?>

<div id="bloc_admin">
    <div id="bloc_admin_album">
        <?php
        foreach ($albums as $album) {
            ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= router\web('pics/',  "ph_".(strlen(\models\photo\photoCouverture($album['idAlb'])[0]['idPh']) == 2 ? \models\photo\photoCouverture($album['idAlb'])[0]['idPh'] : "0".\models\photo\photoCouverture($album['idAlb'])[0]['idPh']).".jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $album['nomAlb'] ?></h5>
                    <div href="#" class="btn btn-primary">Modifer</div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>


<?php



include("inc/footer.php");

?>