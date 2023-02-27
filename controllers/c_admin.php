<?php namespace ctrl\admin;

function index() {
    return "afficher";
}

function afficher($id=null){
    view("adminPanel", [
        "titre"=>"Panel Admin",
        "current_album"=>$_SESSION['current_album'],
        "albums"=>\models\album\get(),
        "photos"=>\models\photo\get()
    ]);
}

