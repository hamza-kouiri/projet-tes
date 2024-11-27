<?php

$date = date("d-m-y");
echo "aujourd'hui nous sommes le $date \n";
$dates = date("l");
if ($dates == "Saturday") {
    echo "  Je vous souhaite un bon week-end  ";
} elseif ($dates == "Sunday") {
    echo "  Je vous souhaite un bon dimanche  ";
} else {
    echo "Je vous souhaite une bonne journée ";
}
