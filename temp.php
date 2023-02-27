


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/albums_MVC/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ajouter une photo</title>
</head>
<body>
<span id="burger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</span>
<div id="menu" class="hideMenu"> <a class="btn btn-primary pop" href="/albums_MVC/album/afficher/1">Chats</a><a class="btn btn-primary pop" href="/albums_MVC/album/afficher/2">Chiens</a><a class="btn btn-primary pop" href="/albums_MVC/album/afficher/3">Oiseaux</a>    <a class="btn btn-primary pop" href="/albums_MVC/photo/afficher/">Toutes les photos</a>
    <a class="btn btn-info pop" href="/albums_MVC/photo/ajouter/1">Ajouter une photo</a>
    <a class="btn btn-warning pop" href="/albums_MVC/admin/afficher/">Espace Admin</a>
</div>
<div id="bloc_ajout">
    <div id="bloc_form_add">
        <form name="ajoutPhoto" action="temp.php" method="post" enctype="multipart/form-data">
            <div id="nom_ajout">
                <input type="file" name="nomPhoto" id="addname" class="form-control" required>
            </div>
    </div>
    <div id="bloc_change_album" class="show_change_album">
        <div id="bloc_selection">
            <div class="input-group">
                <div class="input-group-text">
                    <input value="1" type="checkbox" id="scales_1" name="scales[]" class="form-check-input mt-0" checked>
                </div>
                <label class="form-control" for="scales_1">Chats</label>
            </div>
            <div class="input-group">
                <div class="input-group-text">
                    <input value="2" type="checkbox" id="scales_2" name="scales[]" class="form-check-input mt-0" >
                </div>
                <label class="form-control" for="scales_2">Chiens</label>
            </div>
            <div class="input-group">
                <div class="input-group-text">
                    <input value="3" type="checkbox" id="scales_3" name="scales[]" class="form-check-input mt-0" >
                </div>
                <label class="form-control" for="scales_3">Oiseaux</label>
            </div>
        </div>
        <div id="bloc_validation">
            <input name="ajoutPhoto" type="submit" value="Valider" id="btn_validation" class="btn btn-success">
        </div>
    </div>
    </form>
</div>
<?php
if(isset($_FILES['nomPhoto'])) {
    $tmpName = $_FILES['nomPhoto']['tmp_name'];
    $name = $_FILES['nomPhoto']['name'];
    $size = $_FILES['nomPhoto']['size'];
    $error = $_FILES['nomPhoto']['error'];

    echo $tmpName . "<br>";
    echo $name . "<br>";
    echo $size . "<br>";
    echo $error;


    }
var_dump($_SERVER);
?>


</body>

<script src=/albums_MVC/public/scripts/openMenu.js ></script>
<script src=/albums_MVC/public/scripts/openChangeAlbum.js ></script>

</html>