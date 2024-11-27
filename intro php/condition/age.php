<?php

$age = readline("Saisir votre âge : ");

if ($age < 18) {
    echo " Vous êtes mineur ";
} elseif ($age == 18) {
    echo " Vous êtes majeur  ";
} else {
    $annees = 2024 - $age;
    echo "Vous êtes déjà majeur depuis $annees années ";
}
