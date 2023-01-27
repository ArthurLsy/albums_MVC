<?php



?>
<span id="burger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</span>
<div id="menu" class="hideMenu"> <?php
    while ($ligne = mysqli_fetch_array(router\query("SELECT * FROM albums"))) {
        ?><a class="btn btn-primary pop" href="index.php?id=<?php echo $ligne['idAlb'] ?>"><?php echo $ligne['nomAlb'] ?></a><?php
    }
    ?>
</div>