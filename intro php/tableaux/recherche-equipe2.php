<?php

$equipes = ['France', 'Brésil', 'Argentine', 'Espagne', 'Sénégal', 'Australie', 'Belgique'];

$nom = readline("saisir une équipe : ");


$pré = in_array($nom, $equipes);
if ($pré == true)
    echo "$nom sera présente à la prochaine coupe du monde !";
