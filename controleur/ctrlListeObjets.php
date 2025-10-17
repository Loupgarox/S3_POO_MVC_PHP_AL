<?php

include_once "$racine/modele/modeleObjetDAO.php";

// Récupération des données nécessaires à l'affichage 
$listeObjets = ModeleObjetDAO::readAll();

//Calcul de la page début et de la page fin
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);

const PAGE_MAX = 19;

if($page > PAGE_MAX)
{
    $page = PAGE_MAX;
}

if($page < 1)
{
    $page = 1;
}

$debut = ($page - 1) * 6;
$fin = $debut + 6;
if($fin > 109){
    $fin = 109;
}

//Préparation des numéros de page à afficher
$p1 = $page;
$p2 = $page + 1;
$p3 = $page + 2;

$precedente = true;
if($p1 == 1){
    $precedente = false;
}

$suivante = true;
if($p1 >= PAGE_MAX || $p2 >= PAGE_MAX || $p3 >= PAGE_MAX){
    $suivante = false;
}

// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/vueEntete.php";
include "$racine/vue/vueListeObjets.php";
include "$racine/vue/vuePied.php";

