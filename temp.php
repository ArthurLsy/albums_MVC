


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/albums_MVC/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Panel Admin</title>
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
<div id="bloc_admin">
    <div id="bloc_admin_album">
        <div class="card" style="width: 18rem;">
            <img src="/albums_MVC/public/pics/ph_04.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chats</h5>
                <div href="#" class="btn btn-primary">Modifer</div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="/albums_MVC/public/pics/ph_01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chiens</h5>
                <div href="#" class="btn btn-primary">Modifer</div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="/albums_MVC/public/pics/ph_03.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Oiseaux</h5>
                <div href="#" class="btn btn-primary">Modifer</div>
            </div>
        </div>
    </div>
</div>


</body>

<script src=/albums_MVC/public/scripts/openMenu.js ></script>
<script src=/albums_MVC/public/scripts/openChangeAlbum.js ></script>

</html>