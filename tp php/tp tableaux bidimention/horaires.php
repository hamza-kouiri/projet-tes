<?php



$horaires = [
    "lundi" => ["Matin" => "09h-12h30", "Après-midi" => "14h-18h"],
    "mardi" => ["Matin" => "09h-12h30", "Après-midi" => "14h-18h"],
    "mercredi" => ["Matin" => "fermé", "Après-midi" => "Fermé"],
    "jeudi" => ["Matin" => "10h-13h ", "Après-midi" => "15h-19h "],
    "vendredi" => ["Matin" => "09h-12h30", "Après-midi" => "14h-18h"],
    "samedi" => ["Matin" => "10h-13h ", "Après-midi" => "14h-17h"],
    "dimanche" => ["Matin" => "Fermé", "Après-midi" => "Fermé"],
];

print_r($horaires["lundi"]);

foreach ($horaires as $horaire => $jour) {
    echo   $horaire . " |  matin: " . $jour["Matin"] . " | " .  " Après-midi: " . $jour["Après-midi"] . "\n";
}


$joure = readline("entrer un jour de la semaine: ");
$heure = readline("entrer une heure: ");
if ($heure<13)
$minute = substr($horaire[$jour]["Matin"],1);



if ($horaire == $joure && $minute == $heure) {
    echo "le magasin est ouvert le $joure a $heure ";
} else {
    echo "Le magasin est fermé le $joure a $heure";
}
echo " $minute";
