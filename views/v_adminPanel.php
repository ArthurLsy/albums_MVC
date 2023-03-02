<?php

include("inc/header.php");


?>

<div id="bloc_admin">
    <?php
    if (!isset($idAlbum)) {
    ?>
    <div id="bloc_admin_album">
        <?php
        foreach ($albums as $album) {
            ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= router\web('pics/',  "ph_".(strlen(\models\photo\photoCouverture($album['idAlb'])[0]['idPh']) == 2 ? \models\photo\photoCouverture($album['idAlb'])[0]['idPh'] : "0".\models\photo\photoCouverture($album['idAlb'])[0]['idPh']).".jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $album['nomAlb'] ?></h5>
                    <a href="<?= \router\url("admin","afficher",[$album['idAlb']]) ?>" class="btn btn-primary btn_modif">Modifer</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    } else {
    ?>
        <div id="bloc_album_modif">
            <div class="card" style="width: 100%;">
                <img src="<?= router\web('pics/',  "ph_".(strlen(\models\photo\photoCouverture($idAlbum)[0]['idPh']) == 2 ? \models\photo\photoCouverture($idAlbum)[0]['idPh'] : "0".\models\photo\photoCouverture($idAlbum)[0]['idPh']).".jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <form action="<?= \router\url("admin","modifAlbum",[$albumEnCours['idAlb']]) ?>" method="post">
                        <input name="nomAlbum" type="text" value="<?= $albumEnCours['nomAlb'] ?>">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?= \router\url("admin","supprAlbum",[$albumEnCours['idAlb']]) ?>" type="button" class="btn btn-danger">Supprimer</a>
                        <input type="submit" class="btn btn-success" value="Enregistrer">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
        <div id="btn_ajout_alb" class="btn btn-info">Ajouter un Album</div>
        <div id="bloc_ajout_alb" class="hide_add_album">
            <form action="<?= \router\url("admin","ajouterAlbum") ?>" method="post">
                <input type="text"name="nomAlb" placeholder="Nom du nouvel album">
                <input type="submit" class="btn btn-success">
            </form>
        </div>
</div>

<script src=<?php echo router\web("scripts/","openAjoutAlb.js") ?> ></script>


<?php


include("inc/footer.php");

?>