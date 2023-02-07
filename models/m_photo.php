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
?>