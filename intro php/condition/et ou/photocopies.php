<?php

$photocopies  = readline("indique le nombre de photocopies réalisées:  ");

if ($photocopies <= 10) {
    $prix = $photocopies * 0.30;
    echo "vous devais payer $prix";
} elseif ($photocopies <= 20) {
    $prix = $photocopies * 0.25;
    echo "vous devais payer $prix";
} elseif ($photocopies > 20) {
    $prix1 = $photocopies * 0.20;
    echo "vous devais payer $prix1";
} elseif ($prix1 > 50) {
    $prix2 = $prix * 0.1;
    echo "vous devais payer $prix2";
}
