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
            "photo"=>\models\photo\get($id)
        ]);
    }
}

?>