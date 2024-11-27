<?php
$articles = array_values($articles);
$stocks = array_values($stocks);
$ventes = array_values($ventes);



echo "Articles en stock après suppression :\n";
    foreach ($articles as $index => $article) {
        echo $article . " : " . $stocks[$index] . "\n";
    }