<?php

$notes = [10, 12.5, 14, 7, 15, 9.5, 8];

$total = array_sum($notes) . "\n";

$nombre = count($notes);
$moyenne = $total / $nombre;

$moyenne = ROUND($moyenne);

if ($moyenne < 10) {
    echo "$moyenne Vous n'avez pas votre diplôme";
} elseif ($moyenne < 12) {
    echo "$moyenne Mention passable";
} elseif ($moyenne < 14) {
    echo "$moyenne Mention assez bien";
} elseif ($moyenne < 16) {
    echo "$moyenne Mention bien";
} elseif ($moyenne >= 16) {
    echo "$moyenne Mention très bien";
}
