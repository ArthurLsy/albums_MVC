<?php namespace ctrl\album;

function index() {
    return "afficher";
}

function afficher($id=null){
    $id = $id ?? \models\album\random();
    $_SESSION['current_album'] = ["idAlb"=>$id, "nomAlb"=> \database\select("SELECT idAlb FROM albums WHERE idAlb=.$id",0)];
    view("lesPhotos", [
        "titre"=>"Album",
        "current_album"=>$_SESSION['current_album'],
        "photos"=>\models\photo\getByAlbumVisible($id),
        "albums"=>\models\album\get()

    ]);
}

?>