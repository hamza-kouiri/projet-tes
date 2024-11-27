<?php

$emails = [
    "hamza" => "hamzak@gmail.com",
    "hamza2" => "hamzakouiri25@laposte.net",
    "hamza3" => "kouirih@free.fr"
];

$domaineUtil = readline("Saisir le nom de domaine d'un membre : ");


foreach ($emails as $nom => $email) {
    if (str_contains($email, strtolower($domaineUtil))) {
        echo "$nom : $email\n";
    }
}