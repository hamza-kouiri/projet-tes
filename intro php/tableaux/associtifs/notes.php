<?php


$notes = [
    "dupond" => 15,
    "martin" => 10,
    "durand" => 8
];
print_r($notes);

unset($notes["dupond"]);
unset($notes["martin"]);


$notes["dupond"] = 18;
$notes["martin"] = 18;


$notes["kouiri"] = 18;

print_r($notes);
