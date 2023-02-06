<?php



?>
<span id="burger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</span>
<div id="menu" class="hideMenu"> <?php
    foreach ($albums as $album) {
        ?><a class="btn btn-primary pop" href="index.php?id=<?php echo $album['idAlb'] ?>"><?php echo $album['nomAlb'] ?></a><?php
    }
    ?>
</div>