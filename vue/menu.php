<?php
$sql = "SELECT * FROM albums";
$res = mysqli_query($albums,$sql);

?>
<span id="burger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</span>
<div id="menu" class="hideMenu"> <?php
    while ($ligne = mysqli_fetch_array($res)) {
        ?><a class="btn btn-primary pop" href="index.php?id=<?php echo $ligne['idAlb'] ?>"><?php echo $ligne['nomAlb'] ?></a><?php
    }
    ?>
</div>