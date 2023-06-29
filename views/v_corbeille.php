<?php

include("inc/header.php");


?> <div id="bloc_image"> <?php
foreach ($photos AS $photo) {
    echo '<div class="div_pics card" id="div_pics_'.$photo['idPh'].'">';
    echo '<a href="'.router\url("photo", "afficher", [$photo['idPh']]).'"><img class="pics card-img-top" src="'.router\web('pics/', $photo['nomPh']).'" /></a>';
    echo '<a href="'.router\url("photo", "restaurer", [$photo['idPh']]).'" class="btn btn-outline-info">Restaurer</a>';
    echo '<a href="'.router\url("photo", "supprimer", [$photo['idPh']]).'" class="btn btn-outline-danger">Supprimer</a>';
    echo '</div>';
}
?> </div> <?php

include("inc/footer.php");
