<?php namespace ctrl\photo;

use function models\photo\set;

function index() {
    return "afficher";
}

function afficher($id=null) {
    if($id==null) {
        view("lesPhotos", [
            "titre"=>"Photos",
            "current_album"=>$_SESSION['current_album'],
            "albums"=>\models\album\get(),
            "photos"=>\models\photo\getPhotoVisible()
        ]);
    } else {
        view("unePhoto", [
            "titre"=>"Une photo",
            "current_album"=>$_SESSION['current_album'],
            "albums"=>\models\album\get(),
            "photo"=>\models\photo\getPhotoVisible($id)
        ]);
    }
}

function editer($idPh,$idAlb) {
    view("edit", [
        "titre"=>"Editer une photo",
        "current_album"=>$_SESSION['current_album'],
        "albums"=>\models\album\get(),
        "photo"=>\models\photo\get($idPh)
    ]);
}

function modifierAlbum($idPh) {
    \models\photo\modifer($idPh, $_POST["scales"]);
    redirect("album","afficher",$_SESSION["current_album"]);
}

function ajouter($idAlb) {
    view("ajouterPhoto", [
        "titre"=>"Ajouter une photo",
        "current_album"=>$_SESSION['current_album'],
        "albums"=>\models\album\get()
    ]);
}

function ajouterPhoto() {
    if(isset($_FILES['nomPhoto'])) {
        \models\photo\set($_POST["scales"]);
        redirect("album", "afficher", [$_SESSION['current_album']["idAlb"]]);
    }
}

function supprimer($idPh, $idAlb = null) {
    \models\photo\del($idPh);
    if ($idAlb == null) {
        redirect("corbeille","afficher");
    } else {
        redirect("album","afficher",[$idAlb]);
    }
}

function toTheTrash($idPh) {
    \models\photo\trash($idPh);
    redirect("corbeille","afficher");
}

function restaurer($idPh) {
    \models\photo\restore($idPh);
    redirect("Corbeille","afficher");
}

?>