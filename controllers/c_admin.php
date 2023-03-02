<?php namespace ctrl\admin;

function index() {
    return "afficher";
}

function afficher($id=null){
    if ($id == null) {
        view("adminPanel", [
            "titre" => "Panel Admin",
            "current_album" => $_SESSION['current_album'],
            "albums" => \models\album\get(),
            "photos" => \models\photo\get()
        ]);
    } else {
        view("adminPanel", [
            "titre" => "Panel Admin",
            "current_album" => $_SESSION['current_album'],
            "idAlbum" => $id,
            "albumEnCours" => \models\album\get($id),
            "albums" => \models\album\get(),
            "photos" => \models\photo\get()
        ]);
    }
}

function modifAlbum($id) {
    \database\set('albums',["nomAlb"=>$_POST['nomAlbum']],$id);
    redirect("admin","afficher");
}

function supprAlbum($id) {
    \models\album\del($id);
    redirect("admin","afficher");
}

function ajouterAlbum() {
    if(isset($_POST['nomAlb']) && $_POST['nomAlb'] != "") {
        \models\album\set($_POST['nomAlb']);
    }
    redirect("admin","afficher");
}