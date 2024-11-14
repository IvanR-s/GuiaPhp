<?php

$cervezas = [
    [
        "nombre" => "Poker",
        "alcohol" => 4.0,
        "pais" => "Colombia"
    ],
    [
        "nombre" => "Corona",
        "alcohol" => 4.5,
        "pais" => "Mexico"
    ]
];
foreach($cervezas as $cerveza){
    foreach($cerveza as $key => $value){
        echo $key.": ".$value."<br>";
    }
}