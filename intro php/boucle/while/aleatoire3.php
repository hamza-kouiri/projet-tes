<?php
$nombre = readline("saisir un nombre entre 0 et 1000 :  ");
while ($nombre > 1000 or $nombre < 0) {
    echo "la note saisie n'est pas comprise entre 0 et 1000\n";
    $nombre = readline("saisir un nombre entre 0 et 1000 :  ");
}

$random = random_int(0, 1000);
$coup = 1;
while ($random <> $nombre) {
    $random = random_int(0, 1000);
    $coup += 1;
}
if ($coup > 200) {
    echo "tu n'a pas deviné en moins de 200 coups";
} else {
    echo "le nombre à deviner a été trouvé en $coup coups";
}
