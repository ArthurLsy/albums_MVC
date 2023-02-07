<?php namespace ctrl\album;

function index() {
    return "afficher";
}

function afficher($id=null){
    if ($id==null) {
        $id = \models\album\random();
    }
    view("lesPhotos", [
        "titre"=>"Album",
        "current_album"=>$id,
        "photos"=>\models\photo\getByAlbum($id),
        "albums"=>\models\album\get()

    ]);
}

?>