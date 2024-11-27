<?php

// question 1

$livres = [
    "Le Petit Prince",
    "1984",
    "Les Misérables",
    "Le Rouge et le Noir",
    "Harry Potter",
];
foreach ($livres as $livre) {
    echo  "$livre\n"  . ' ';
}
echo "\n";
// question 2

foreach ($livres as $id => $livre) {
    $id++;
    echo "$id ." . "  $livre  \n " . ' ';
}
echo "\n";
//question 3 
foreach ($livres as $livre) {
    $caracter = strlen($livre);
    echo  "$livre"  . " ($caracter caracter )\n";
}
echo "\n";
echo "\n";


//question 4
foreach ($livres as $livre) {
    $caracter = strlen($livre);

    if ($caracter > 10) {
        echo "$livre\n";
    }
}

//question 5

echo "\n";
echo "\n";


asort($livres);
foreach ($livres as $id => $livre) {
    echo "$livre\n";
}

echo "\n";
echo "\n";

// question 6
$sub=substr($phrase,0,11);
$nombre = 0 ; 
$mot = readline("saisir un mot : ");
if($mot == $livres){
$nombre =+1; 
}
echo $nombre;

