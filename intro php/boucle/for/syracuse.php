<?php

$N = readline("saisir  un nombre: ");


for ($i = 0; $i != 20; $i++) {
    echo $N . " ";
    if ($N % 2 == 0) {
        $N /= 2;
    } else {
        $N = ($N * 3) + 1;
    }
}
