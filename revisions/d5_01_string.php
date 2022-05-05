<?php

// STRING FUNCTIONS
$string = 'Here, take a beer.';

// Make the whole string lowercase
echo strtolower($string) . '<br>';

// Make the whole string uppercase
echo strtoupper($string) . '<br>';

// First letter uppercase
echo ucfirst($string) . '<br>';

// Find the position of a substring in a string
echo strpos($string, ',') . '<br>';
echo strpos($string, 'beer') . '<br>';

// Replace all occurences of a sub-string in a string
echo str_replace('beer', 'coca-cola', $string);

// Get the length of a string
echo strlen($string) . '<br>';

// Retrieve only one part of the string
// chars count from 0
$string = 'Here, take a beer.';
echo substr($string, 12) . '<br>'; //  take string from the 12th char position
echo substr($string, -5) . '<br>'; // takes the string from the -5th position and displays it
echo substr($string, 6, 4) . '<br>'; // takes the 6th char position and displays 4 chars

// Convert a string into an array
$string = 'simon;venus;ashkan';
$myArray = explode(';', $string);
var_dump($myArray);

// Turn an array into a string
$myArray = ['simon', 'venus', 'steve'];
echo implode('//', $myArray);
