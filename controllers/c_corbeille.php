<?php namespace ctrl\corbeille;

function index() {
    return "afficher";
}

function afficher(){
    view("corbeille", [
        "titre"=>"Corbeille",
        "current_album"=>$_SESSION['current_album'],
        "photos"=>\models\photo\getPhotoInvisible(),
        "albums"=>\models\album\get()
    ]);
}