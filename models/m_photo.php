<?php namespace  models\photo;

    function get($id=0) {
        return \database\get("photos", $id);
    }

    function getByAlbum($id) {
        return \database\select('SELECT * FROM photos INNER JOIN comporter ON comporter.idPh = photos.idPh WHERE idAlb = '.$id.';');
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

?>