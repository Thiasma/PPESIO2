
<h1 align="center">Liste des Salles</h1>

<?php
for ($i = 0; $i < count($listeSalles); $i++) {

    ?>

    <div class="card">
        
        <div class="descrCard"><?php echo "<a href='./?action=detail&nSalle=" . $listeSalles[$i]['nSalle'] . "'>" . $listeSalles[$i]['nomSalle'] . "</a>"; ?>
            <br />
            <?= $listeSalles[$i]["nomSalle"] ?>
            <?= $listeSalles[$i]["nSalle"] ?>
            <br />
            <?= $listeSalles[$i]["nbPoste"] ?>
            <?= $listeSalles[$i]["indIP"] ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">		


            </ul>


        </div>

    </div>





    <?php
}
?>


