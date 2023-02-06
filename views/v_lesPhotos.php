<?php

include("inc/header.php");

?> <div id="bloc_image"> <?php
foreach($photos AS $photo){
    echo '<a href="'.router\url("photo", "afficher", [$photo['idPh']]).'.jpg"><img class="pics" src="'.router\web('pics/', $photo['nomPh']).'.jpg" /></a>';
}
?> </div> <?php

include("inc/footer.php");

?>