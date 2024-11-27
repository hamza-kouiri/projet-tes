<?php

$email = readline("Saisir un mail : ");
if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
    echo "l'adresse email $email est valide  ";
} else {
    echo "l'adresse email $email est invalide ";
}
