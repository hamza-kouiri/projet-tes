<?php

$nombre = readline("saisir un nombre entre 0 et 1000 :  ");
$random = random_int(0, 1000);
$coup = 1;
while ($random <> $nombre) {
    $random = random_int(0, 1000);
    $coup += 1;
}
echo "le nombre à deviner a été trouvé en $coup coups";
