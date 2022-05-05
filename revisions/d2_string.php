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
