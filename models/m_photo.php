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

    function last() {
        return \database\select("SELECT idPh FROM photos ORDER BY idPh DESC LIMIT 1 ;",0);
    }

    function set($nomPhoto,$tbAlbum) {
        \database\set("photos", ["nomPh"=>$nomPhoto]);
        foreach ($tbAlbum as $assoc){
            \database\set("comporter", ["idPh"=>last(), "idAlb"=>$assoc]);
        }
    }
?>