<?php

// déclarer un tableau associatif 

$personnes = [
    "durand" => 45,
    "martin" => 35,
    "dupond" => 53,
];

echo $personnes["durand"];//45
echo "\n";

// afficher age 
foreach($personnes as $age){
echo $age . ' ';
}
echo "\n";
echo "\n";

// lister les nom est les age 

foreach($personnes as $nom => $age  );{
    echo "$nom a $age  ans !\n " . ' ';
    
}


// pour recuperer un clef 

$noms = array_keys($personnes);

//$nom est un tableau indexe

print_r($noms);

//ajouter un nouvelle persone 

$personnes["kouiri"]= 25;