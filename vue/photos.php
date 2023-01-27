<?php
if (isset($_GET['id'])) {
    $sqlPh = "SELECT * FROM photos INNER JOIN comporter ON photos.idPh = comporter.idPh WHERE comporter.idAlb = ".$_GET['id'].";";
    $resPh = mysqli_query($albums,$sqlPh);
    ?> <div id="bloc_image"><?php
    while ($ligne = mysqli_fetch_array($resPh)) {
        ?>
        <img  href="index.php?id=<?php $_GET['id'] ?>" class="pics" src="pics/<?php echo $ligne['nomPh'] ?>" alt="">
        <?php
    }
    ?> </div> <?php
}
?>