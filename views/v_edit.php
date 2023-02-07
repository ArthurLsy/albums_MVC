<?php
include("inc/header.php");

?>
    <div id="bloc_edit">
        <div id="bloc_edit_btn" class="card">
            <img id="photo_edit" class="pics card-img-top" src="<?php echo router\web('pics/', $photo['nomPh']) ?>"/>
            <div id="bloc_btn_edit">
                <a class="btn_edit btn btn-secondary">Changer d'album</a>
                <a class="btn_edit btn btn-danger"
                   href="<?php echo router\url("photo", "supprimer", [$photo['idPh'], $current_album]) ?>">Supprimer</a>
            </div>
        </div>
        <div id="bloc_change_album" class="card">
            <div id="bloc_selection">
                <?php
                foreach ($albums as $album) {
                    ?>
                    <div class="input-group">
                        <div class="input-group-text">
                        <input type="checkbox" id="scales" name="scales" class="form-check-input mt-0">
                        </div>
                        <label class="form-control" for="scales"><?php echo $album['nomAlb'] ?></label>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div id="bloc_validation">
                <a href="" id="btn_validation" class="btn btn-success">Valider</a>
            </div>
        </div>
    </div>
<?php

include("inc/footer.php");
?>