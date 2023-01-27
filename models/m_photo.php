<?php namespace  models\photo;

    function get($id=0) {
        return \database\get("photos", $id);
    }

?>