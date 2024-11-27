<?php

// Crée une variable prenom contenant un prénom
$prenom = "hamza";
echo $prenom;
// Modifier la variable
$prenom = "toto ";
echo PHP_EOL;
echo $prenom;
echo PHP_EOL;
echo "bonjour je m'appelle ". $prenom;
echo PHP_EOL;
echo "bonjour je m'appelle $prenom";
echo PHP_EOL;
$prenomMajuscule = strtoupper($prenom);
echo strlen($prenom);