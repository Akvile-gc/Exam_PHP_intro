<?php
//3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
//Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
//      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)
//
//      Destination "Paris".
//Titles: "Romantic Paris", "Hidden Paris"
//      Total: 99500
//************
//      Destination "New York"
//      ...

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function tripSummary(array $trips)
{
//    for ($i = 0; $i < count($trips); $i++){
//        if ($trips[$i]['price'] !== null){
//            if (in_array($trips[$i]['destination'], $trips[$i]) ){
//            }
//        }
//        }

    foreach ($trips as $trip){
        if ($trip['price'] !== null){
            echo 'Destination: ' . $trip['destination'] . PHP_EOL;
            echo 'Titles: ' . $trip['title'] . PHP_EOL;
            echo 'Total: ' . $trip['price'] * $trip['tourists']. PHP_EOL;
            echo '************' . PHP_EOL;
        }
    }
}

tripSummary($holidays);