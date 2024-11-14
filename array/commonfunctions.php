<?php

$cervezas = [
    "Club",
    "Aguila",
    "Poker",
    "Corona"
];

$cervezas2 = [
    "Club2",
    "Aguila2",
    "Poker2",
    "Corona2"
];

$cervezaMixed = array_merge($cervezas, $cervezas2);
print_r($cervezaMixed);

array_push($cervezas, "Budweiser");
$cerveza = array_pop($cervezas);

echo count($cervezas);

print_r($cervezas);

echo $cerveza;

if(in_array("Corona", $cervezas)){
    echo "existe";
}