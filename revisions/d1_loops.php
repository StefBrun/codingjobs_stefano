<?php

/* LOOPS
In programming, a loop repeats a specific block of code as many times as you want.

When to use a loop : Do I repeat the same thing many times ? If yes, else dt use it.

For example : 
    - Adding the numbers from 1 to 100
    $total =  1 + 2 + 3 + 4 + 5 + 6 + ....... + 100;
    - Considering my movies array. To display all the movies :
        echo $movies[0] . $movies[1] .......
*/

// 1 . For Loop

for ($i = 0; $i < 10; $i++) {
    // echo $i . '<br>';
}

// For loop is used to execute code a specific number of times.

// 2. While

$a = 0;

while ($a < 10) {
    // echo $a . '<br>';
    $a++;
}
// While loop is used to execute code as long as a condition is true

// 3. Do...While
$a = 20;

do {
    // echo $a . '<br>';
} while ($a <= 10);

// Do While is used to execute code at least once, then the rest depends on the condition

// 4. For Each loop : Iterate through an array
$movies = array(
    0 => "NightCrawler",
    1 => "Snatch", // HERE : $key = 1 / $value = "Snatch"
    2 => "Blues Brothers"
);

// Foreach will provide the current $key and $value
foreach ($movies as $key => $value) {
    //echo $key . " " . $value . "<br>";
}

// You can change the name of those two default variables
foreach ($movies as $position => $title) {
    // echo $position . " " . $title . "<br>";
}

// You can skip to grab the key if not necessary
foreach ($movies as $title) {
    // echo $title . "<br>";
}

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

foreach ($movies as $key => $value) {
    echo $movies[$key]['title'] . '<br>';
    // Same thing, different syntax : echo $value['title'] . '<br>';
}
