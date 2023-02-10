<?php namespace ctrl\photo;

use function models\photo\set;

function index() {
    return "afficher";
}

function afficher($id=null) {
    if($id==null) {
        view("lesPhotos", [
            "titre"=>"Photos",
            "albums"=>\models\album\get(),
            "photos"=>\models\photo\get()
        ]);
    } else {
        view("unePhoto", [
            "titre"=>"Une photo",
            "albums"=>\models\album\get(),
            "photo"=>\models\photo\get($id)
        ]);
    }
}

function editer($idPh,$idAlb) {
    view("edit", [
        "titre"=>"Editer une photo",
        "current_album"=>$idAlb,
        "albums"=>\models\album\get(),
        "photo"=>\models\photo\get($idPh)
    ]);
}

function modifierAlbum($idPh) {
    \models\photo\modifer($idPh, $_POST["scales"]);
}

function ajouter($idAlb) {
    view("ajouterPhoto", [
        "titre"=>"Ajouter une photo",
        "current_album"=>$idAlb,
        "albums"=>\models\album\get()
    ]);
}

function ajouterPhoto() {
    \models\photo\set($_POST['nomPhoto'],$_POST["scales"]);
}

function supprimer($idPh, $idAlb) {
    \models\photo\del($idPh);
    redirect("album","afficher",[$idAlb]);
}

?>