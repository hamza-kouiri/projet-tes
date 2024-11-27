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


$jour = readline("entrer un jour de la semaine: ");
//$heure = readline("entrer une heure: ");

$horairesJour = $horaires[$jour];
print_r($horairesJour);

$ouverHeureMatin = substr($horairesJour["Matin"], 0, -6);
echo "$ouverHeureMatin";

echo "\n";

$ferméHeureMatin = substr($horairesJour["Matin"], 4, 2);
echo "$ferméHeureMatin";

echo "\n";


$ouverHeureMidi = substr($horairesJour["Après-midi"], 0, -6);
echo "$ouverHeureMidi";

echo "\n";

$ferméHeureMidi = substr($horairesJour["Après-midi"], 4, 2);
echo "$ferméHeureMidi";
