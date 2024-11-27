<?php

$notes = [10, 12.5, 14, 7, 15, 9.5, 8];

$total = array_sum($notes) . "\n";

$nombre = count($notes);
$moyenne = $total / $nombre;

echo    ROUND($moyenne);
