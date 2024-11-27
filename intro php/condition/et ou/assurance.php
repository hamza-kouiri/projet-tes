<?php

$age  = readline("saisie un age:  ");
$sexe = readline("saisie un sexe :  ");

if (($age > 22  and $sexe == "M") or (($age >= 20 and $age <= 30) and $sexe == "F")) {
    echo "doit payer la surprime ";
} else {
    echo "ne doit pas payer la surprime ";
}
