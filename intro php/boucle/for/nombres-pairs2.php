<?php


for ($nombremax = readline("Saisir  un nombre: "), $nombre = 0; $nombre < $nombremax; $nombre++) {
    if ($nombre % 2 == 0) {
        echo "$nombre ";
    }
}
