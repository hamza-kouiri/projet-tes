<?php

$produits = [
    "pomme" => 15,
    "poire" => 10,
    "banane" => 8
];

$total=0;

foreach($produits as $produit => $prix  ){
    $total += $prix;
}
echo $total;
