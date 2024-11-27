<?php

$largeur = readline("largeur du rectangle: ");
$hauteur = readline("hauteur du rectangle: ");

for ($i = 1; $i <= $hauteur; $i++) {

    for ($j = 1; $j <= $largeur; $j++) {
        echo "* ";
    }
    echo "\n";
}
