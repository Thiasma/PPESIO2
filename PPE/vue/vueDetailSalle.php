<h1 align=center><?= $uneSalle['nomSalle']; ?></h1>

 
<div align="center">
<h2 id="crit">Les postes</h2>
</div>
<ul id="postes">
    <?php for ($i = 0; $i < count($lesPostes); $i++) { 
	?>
		
		<li>
            <span>
                <p> Nom : <?= $lesPostes[$i]["nomPoste"] ?> </p>
            </span>
            <span>
                <p> Adresse IP : <?= $lesPostes[$i]["indIP"] ?> </p>
            </span>
            <span>
                <p> Administarateur : <?= $lesPostes[$i]["ad"] ?> </p>
            </span>
        </li>
        </br>
    <?php } ?>
</ul>
