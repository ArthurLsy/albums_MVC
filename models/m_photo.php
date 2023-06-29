<?php namespace  models\photo;

    function get($id=0) {
        return \database\get("photos", $id);
    }

    function getByAlbumVisible($id) {
        return \database\select("SELECT photos.idPh, photos.nomPh
            FROM photos
            INNER JOIN comporter ON photos.idPh = comporter.idPh
            WHERE comporter.idAlb = '.$id.' AND photos.visible = 1;");
    }

    function del($id) {
        \database\del("photos",$id);
    }

    function idPhoto($nomPh) {
        return \database\select("SELECT idPh FROM photos WHERE nomPh = '".$nomPh."';",0);
    }

    function recupIdAlbum($idPh) {
        return \database\select("SELECT idAlb FROM comporter WHERE idPh = '.$idPh.';");
    }

    function ajoutPhotoAlbum($idPh,$idAlb) {
        \database\set("comporter", ["idPh"=>$idPh, "idAlb"=>$idAlb]);
    }

    function set($tbAlbum) {
        $tmpName = $_FILES['nomPhoto']['tmp_name'];
        $idPh = \database\set("photos", ["nomPh"=>"ph_temp"]);
        $name = "ph_".$idPh.".jpg";
        \database\set("photos", ["nomPh"=>$name], $idPh);
        move_uploaded_file($tmpName, \router\root().'public/pics/'.$name);
        foreach ($tbAlbum as $assoc){
            ajoutPhotoAlbum($idPh,$assoc);
        }
    }

    function modifer($idPh,$tbAlbum) {
        \database\del("comporter",["idPh"=>$idPh]);
        foreach ($tbAlbum as $assoc){
            ajoutPhotoAlbum($idPh,$assoc);
        }
    }

    function photoCouverture($idAlb) {
        return \database\select(
            'SELECT idPh
            FROM comporter
            WHERE idAlb = '.$idAlb.';');
    }

    function getPhotoVisible($id = null){
        if ($id == null) {
            $photos = [];
            $pics = \database\select(
                'SELECT idPh
                FROM photos
                WHERE visible = 1;');
            foreach ($pics as $pic){
                array_push($photos, get($pic['idPh']));
            }
            return $photos;
        } else {
            return get($id);
        }
    }

    function getPhotoInvisible(){
        $photos = [];
        $pics = \database\select(
            'SELECT idPh
            FROM photos
            WHERE visible = 0;');
        foreach ($pics as $pic){
            array_push($photos, get($pic['idPh']));
        }
        return $photos;
    }

    function trash($idPh){
        \database\set("photos", ["visible"=>0], $idPh);
    }

    function restore($idPh){
        \database\set("photos", ["visible"=>1], $idPh);
    }
?>