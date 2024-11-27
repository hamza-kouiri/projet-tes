<?php
$nombre = readline("largeur du rectangle: ");

for ($i = 1; $i <= 20; $i++) {
    echo $nombre . " ";
    if ($nombre % 2 == 0) {
        $nombre = $nombre / 2;
    } else {
        $nombre = $nombre * 3 + 1;
    }
}
