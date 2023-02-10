<?php

include("inc/header.php");

?>

<div id="bloc_ajout">
    <div id="bloc_form_add">
        <form name="ajoutPhoto" action="<?= \router\url("photo","ajouterPhoto") ?>" method="post">
            <div id="nom_ajout">
                <input type="text" name="nomPhoto" id="addname" type="text" class="form-control" placeholder="Nom de la photo" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
    </div>
    <div id="bloc_change_album" class="show_change_album">
        <div id="bloc_selection">
            <?php
            foreach ($albums as $album) {
                ?>
                <div class="input-group">
                    <div class="input-group-text">
                        <input value="<?= $album['idAlb'] ?>" type="checkbox" id="scales_<?php echo $album['idAlb'] ?>" name="scales[]" class="form-check-input mt-0" <?= $current_album == $album['idAlb'] ? "checked" : "" ?>>
                    </div>
                    <label class="form-control" for="scales_<?php echo $album['idAlb'] ?>"><?php echo $album['nomAlb'] ?></label>
                </div>
                <?php
            }
            ?>
        </div>
        <div id="bloc_validation">
            <input name="ajoutPhoto" type="submit" value="Valider" id="btn_validation" class="btn btn-success">
        </div>
    </div>
    </form>
</div>


<?php

include("inc/footer.php");

?>