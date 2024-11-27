<?php

$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$distance = readline("Saisir la distance du trajet (kms) : ");
$dureeTrajet = readline("Saisir la durée du trajet (h:mm) : ");
$positionSeparateur = strpos($dureeTrajet, ":");
$heures = substr($dureeTrajet, 0, $positionSeparateur);
$minutes = substr($dureeTrajet, $positionSeparateur + 1, 2);

if ($minutes < 60) {
    $dureeMinutes = $heures * 60 + $minutes;
    $vitesse = ceil(($distance / $dureeMinutes) * 60);
    echo "La vitesse moyenne du trajet est de $vitesse km/h";
    echo PHP_EOL;
    if ($vitesse <= 90) {
        echo $fondVert . "Vous êtes en dessous-des 90 km/h" . $normal;
    } else {
        echo $fondRouge . "Vous êtes au dessus-des 90 km/h" . $normal;
    }
} else {
    echo $texteRouge . "ERREUR : la durée $dureeTrajet est invalide 
!" . $normal;
}
