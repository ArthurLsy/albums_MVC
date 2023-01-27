<?php

include "vue/header.php";

$albums = mysqli_connect("localhost","root", "","albums");

if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ".mysqli_connect_error();
    exit;
}

include "vue/menu.php";

include "vue/photos.php";

mysqli_close($albums);

include "vue/footer.php";
?>
