<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Créer un poste";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCreerPoste.php";
include "$racine/vue/pied.html.php";


?>