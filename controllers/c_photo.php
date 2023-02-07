<?php namespace ctrl\photo;

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
        "titre"=>"Supprimer une photo",
        "current_album"=>$idAlb,
        "albums"=>\models\album\get(),
        "photo"=>\models\photo\get($idPh)
    ]);
}

function supprimer($idPh, $idAlb) {
    \models\photo\del($idPh);
    redirect("album","afficher",[$idAlb]);
}



?>