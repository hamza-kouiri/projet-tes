<?php


$heure = readline("saisie un horaire :  ");
$positionSeparateur = strpos($heure, ":");
$heures = substr($heure, 0, $positionSeparateur);

if (($heures >= 9 and $heures < 12)||($heures >= 14 and $heures < 19))  {
    echo "Le magasin est ouvert ";
} else {
    echo " le magasin est fermé  ";
}
