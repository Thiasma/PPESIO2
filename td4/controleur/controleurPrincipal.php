<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["liste"] = "listeSalles.php";
    $lesActions["detail"] = "detailSalle.php";
    $lesActions["recherche"] = "rechercheSalle.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";
	$lesActions["inscription"] = "inscription.php";
	$lesActions["creerPoste"] = "creerPoste.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>