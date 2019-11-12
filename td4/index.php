<?php
include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";
include_once "$racine/modele/authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()

$action = (isset($_GET["action"])) ? $_GET["action"] : $action = (!isset($_SESSION)) ? "connexion" : "defaut";

$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";
?>
     