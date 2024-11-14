<?php

$names = ["Ernesto", "Ronaldo", "Ivan"];
$beer = [
    "name" => "Corona",
    "alcohol" => 4.5,
    "country" => "Mexico"
];
foreach($beer as $k => $v){
    echo $k." ".$v.";";
}