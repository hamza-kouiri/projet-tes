<?php

$date = date("d-m-y");
echo "aujourd'hui nous sommes le $date \n";
echo "il est actuellement ";
echo $heure = date("H\hi\n");
if ($heure >= 13) {
    echo "je vous souhaite un bon après-midi ";
} else {
    echo "je vous souhait une bonne matinée";
}