<?php

// on inclut les modèles nécessaires
include_once "$racine/modele/modeleObjetDAO.php";

// recuperation des donnees GET, POST, et SESSION
$numero = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_STRING);

if($numero != null)
{
    // Récupération des données nécessaires à l'affichage 
    $unObjet = ModeleObjetDAO::getObjetByNumero($numero);
}

// appel des vues qui permettent de gerer l'affichage des données
include "$racine/vue/vueEntete.php";

if($unObjet != null)
{
    include "$racine/vue/vueDetailObjet.php";
}
else
{
    include "$racine/vue/vue404.php";    
}

include "$racine/vue/vuePied.php";
