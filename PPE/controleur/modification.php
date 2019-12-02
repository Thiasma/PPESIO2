<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.inc.php";

$modifié = false;
$msg="";

if ($modifié) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Modification confirmée";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueConfirmationModification.php";
    include "$racine/vue/pied.html.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Modification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueModification.php";
    include "$racine/vue/pied.html.php";
}
?>
