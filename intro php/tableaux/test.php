<?php

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

$nom = readline("saisir une équipe : ");

foreach ($equipes as $equipe) {
    
if ($equipe == $nom) 

 echo "$nom sera présente à la prochaine coupe du monde !";


}





