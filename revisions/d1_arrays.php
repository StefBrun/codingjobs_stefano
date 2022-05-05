<?php

// Numerical Arrays

// Initialize an empty array
$movies = array();
$movies = [];

// Create array with values
$movies = array(
    0 => "NightCrawler",
    1 => "Snatch",
    2 => "Blues Brothers"
);

// Echo works only for strings. Use var_dump for arrays
echo '<pre>';
var_dump($movies);
echo '</pre>';

// Access an element of the array
echo $movies[1];

// Update/Override value
$movies[1] = "Titanic";

// Create a new element
$movies[3] = "Django";

// At the end of the array
$movies[] = "Flash Gordon";

// Remove an element
unset($movies[0]);

// Count number of elements
$nbElements = count($movies);

// Sorting an array
sort($movies);

echo '<pre>';
var_dump($movies);
echo '</pre>';


// ASSOCIATIVE ARRAYS
$contactInformations = array(
    "firstname" => "Lucas",
    "lastname" => "Souza",
    "mail" => "souza@gmail.com",
    "phone" => "+352564584587"
);

echo $contactInformations["mail"];
$contactInformations["mail"] = "lucas@gmail.com";

$movies = [
    0 => [
        'title' => 'NightCrawler',
        'director' => 'Dan Gilroy',
        'release_date' => 2014
    ],
    1 => [
        'title' => 'Star Wars',
        'director' => 'George Lucas',
        'release_date' => 1985
    ],
    2 => [
        'title' => 'Snatch',
        'director' => 'Guy Ritchie',
        'release_date' => 1998
    ]
];

echo $movies[0]['title'];
echo $movies[0]['director'];

echo $movies[1]['director'];
