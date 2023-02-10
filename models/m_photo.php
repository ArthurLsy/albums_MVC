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

    function delComporter($idPh) {
        \database\query("DELETE FROM comporter WHERE idPh = '.$idPh.';");
    }

    function last() {
        return \database\select("SELECT idPh FROM photos ORDER BY idPh DESC LIMIT 1 ;",0);
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

    function set($nomPhoto,$tbAlbum) {
        \database\set("photos", ["nomPh"=>$nomPhoto]);
        $idPh = last();
        foreach ($tbAlbum as $assoc){
            ajoutPhotoAlbum($idPh,$assoc);
        }
    }

    function modifer($idPh,$tbAlbum) {
        delComporter($idPh);
        foreach ($tbAlbum as $assoc){
            ajoutPhotoAlbum($idPh,$assoc);
        }
    }

?>