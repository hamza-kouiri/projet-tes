<?php

$prix = readline("saisir le prix de l'article : ");

if ($prix < 1000) {
    $remise1 = $prix * 0.05;
    $prix_remise = number_format($prix - $remise1, 2,);
    echo " la remise est de 5 %  soit $remise1 euros sur le prix de l'article \n le montan de l'article aprés remise est de $prix_remise  ";
} elseif ($prix >= 5000) {
    $remise1 = $prix * 0.20;
    $prix_remise = number_format($prix - $remise1, 2, '.', '');
    echo "  la remise est de 20 %  soit $remise1 euros sur le prix de l'article \n le montan de l'article aprés remise est de $prix_remise  ";
} else {
    $remise1 = $prix * 0.10;
    $prix_remise = number_format($prix - $remise1, 2, '.', '');
    echo " la remise est de 10 %  soit $remise1 euros sur le prix de l'article \n le montan de l'article aprés remise est de $prix_remise  ";
}
