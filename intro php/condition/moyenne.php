<?php

$note = readline("Saisir une note  : ");
if ($note < 10) {
    echo " vous n'avez pas la moyenne ";
} elseif ($note > 10) {
    echo " BRAVO vous avez plus de la moyenne  ";
} else {
    echo "vous avez juste la moyenne ";
}
