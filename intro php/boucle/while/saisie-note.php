<?php

$note = readline("saisir une note :  ");
while ($note > 20) {
    if ($note <> 20) {
        echo "la note saisie n'est pas comprise entre 0 et 20";
    }
    echo "la note saisie est incorrecte \n";
    $note = readline("saisir une note :  ");
}
echo "la note saisie est correcte";
