<?php
// This is a single line PHP comment

/*
        We can write some comments
        on many lines
    */

// 1. Simple variables
$firstName = "Simon";
$luxPopulation = 3000;
$height = 4.5;
$are_you_ok = false;

/*
    Rules (about variables)  : 
    - Always start with a letter 
    - Can contain numbers
    - No symbols, except underscore
*/

// Display variables:
echo "<h1>" . $firstName . "</h1>";
echo '<br>';
echo $luxPopulation;

// Display type of variable
echo gettype($firstName) . '<br>';

// Display content & type (debug)
var_dump($luxPopulation);

// 2. Arithmetic operators
$a = 5 + 2;
$a = 5 - 2;
$a = 5 * 2;
$a = 5 / 2;
$a = 5 % 2; // whats left of the division

// Incrementing
$a = 10;
$a = $a + 2;
$a += 2;

// Incrementing by 1
$a = $a + 1;
$a += 1;
$a++;

// Decrementing by 1
$a = $a - 1;
$a -= 1;
$a--;


// 3. Concatenation : Put two(or more) strings together
echo "Hello " . $firstName . "<br>";

// 4. Quotes
$drink = 'beer';

// Using single quotes (display as text)
echo 'I need a $drink<br>';
echo 'I need a ' . $drink . '<br>';

// Using double quotes
echo "I need a $drink<br>";

// 5. Escaping characters
echo 'It\'s easy!';
