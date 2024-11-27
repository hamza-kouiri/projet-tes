<?php

// Initialisation du stock

echo "article en vente :\n";
echo "\n";
$articles = ["Chaussettes","T-shirts","Chaussures","Pantalon","Sweat"];

for($i=0;$i<count($articles);$i++) {
    echo $articles[$i]." \n";
}
echo "\n";
foreach($articles as $article) {
    echo $article." \n";
}
echo "\n";

// Gestion des Stocks

echo "article en stock :\n";
echo "\n";
$stocks = [6,45,25,32,29];
$ventes = [0,0,0,0,0];

for($i=0; $i<count($articles);$i++) {
    echo $articles[$i]." : ".$stocks[$i]." \n";
}
echo "\n";

//  Réalisation d'une Vente

$choix = readline("Saisir l'index de l'article que vous voulez acheter : ");
$quantité = readline("Saisir la quantité voulue : ");

if ($stocks[$choix] >= $quantité) {
    $stocks[$choix] -= $quantité;
    $ventes[$choix] += $quantité;
    echo "Vous avez acheté $quantité ".$articles[$choix].". \n";
} else {
    echo "Le stock est insuffisant ! \n";
}
echo "\n";

// Réapprovisionnement du Stock

$choix = readline("Saisir l'index de l'article à réaprovisionner : ");
$quantité = readline("Saisir la quantité voulue : ");

$stocks[$choix] += $quantité;

echo $articles[$choix]." : ".$stocks[$choix]." \n";
echo "\n";

// Synthèse et Affichage du Stock

echo "stock :\n";

foreach($articles as $index => $article) {
    if ($article == 0) {
        echo $article." : rupture de stock \n";
    } else {
        echo $article." : ".$stocks[$index]." \n";
    }
}

echo "\n";

// Suivi des Ventes Totales par Article

echo "Nombre de ventes : \n";

foreach($articles as $index => $article) {
    echo $article." : ".$ventes[$index]." \n";
}
echo "\n";

// Suppression d'un Article

$choix = readline("Saisir l'index de l'article à supprimer : ");

unset($articles[$choix]);
unset($stocks[$choix]);
unset($ventes[$choix]);


$articles = array_values($articles);
    $stocks = array_values($stocks);
    $ventes = array_values($ventes);

    echo "Articles en stock après suppression :\n";
    foreach ($articles as $index => $article) {
        echo $article . " : " . $stocks[$index] . "\n";
    }