<?php

$contacts = [
    "hamza" => "01 42 92 81 00",
    "Lycée Pergaud" => "03 81 54 77 77",
    "matheo" => "06 37 18 69 05"
];

$nomUtil = readline("Saisir le nom d'une personne : ");
if (array_key_exists($nomUtil, $contacts)) {
    echo $contacts[$nomUtil];
} else {
    echo "Le contact n'a pas été trouvé.";
}