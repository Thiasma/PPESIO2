
<h1>Liste des salles</h1>

<?php
for ($i = 0; $i < count($listeSalles); $i++) {
    ?>


    <?php
    $lesTypesSalle = getTypesSalleByIdR($listeSalles[$i]['idR']);
    $lesPhotos = getPhotosByIdR($listeSalles[$i]['idR']);
    ?>

    <div class="card">
        <div class="photoCard">
            <?php if (count($lesPhotos) > 0) { ?>
                <img src="photos/<?= $lesPhotos[0]["cheminP"] ?>" alt="photo de salle" />
            <?php } ?>

        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&idR=" . $listeSalles[$i]['idR'] . "'>" . $listeSalles[$i]['nomR'] . "</a>"; ?>
            <br />
            <?= $listeSalles[$i]["numAdrR"] ?>
            <?= $listeSalles[$i]["voieAdrR"] ?>
            <br />
            <?= $listeSalles[$i]["cpR"] ?>
            <?= $listeSalles[$i]["villeR"] ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">		
                <?php for ($j = 0; $j < count($lesTypesSalle); $j++) { ?>
                    <li class="tag"><span class="tag">#</span><?= $lesTypesSalle[$j]["libelleTC"] ?></li>
                    <?php } ?>
            </ul>


        </div>

    </div>





    <?php
}
?>


