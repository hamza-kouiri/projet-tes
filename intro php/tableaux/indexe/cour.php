<?php
// déclarer un tableau de 3 notes

$notes = [10, 12, 9, 14, 15];
//  ou  $notes = array(10,12,9)

// pour trouver la valeur du tableau il faut fair sa 

echo $notes[1];

// pour tous les afficher il faut faire 
echo "\n";
for ($i = 0; $i < count($notes); $i++) {
    echo $notes[$i] . ' ';
}


// une autre boucle pour les info dans un tableau utilisation de la boucle foreach
echo "\n";
foreach ($notes as $notes) {
    echo $notes . " ";
}

// pour aussi recuperer l'index il faut faire 
echo "\n";
foreach ($notes as $index => $note) {
    echo "$note : $index  ";
}

// pour ajouter une valeur dans le tableau faire sa
echo "\n";
$notes[] = 14;
array_push($notes, 15);
array_push($notes, 13, 12, 8);


// mode debug (voir ce quil y a dans un tableau)
print_r($notes);
var_dump($notes);
