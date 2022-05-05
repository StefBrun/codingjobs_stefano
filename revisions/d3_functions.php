<?php

/*
    FUNCTIONS

    Functions are block of code that you can reuse.
    Functions can either return values, or simply perform an action.

*/
// Declare a function
function hello_world()
{
    // Code to be executed when you call the function
    echo 'Hello, world<br>';
}

// Call a function
// hello_world();
// hello_world();


// Function with return value
function hello_word2()
{
    // Return the message
    return 'Hello, world.<br>';

    // Reaching 'return' keyword stop the function, this will never be executed :
    echo 'Yoyoyoyoyoyoyoyo';
}

// The value is returned, so we need to save or display it
echo hello_word2();
// or
$message = hello_word2();
echo $message;


// Scope : visibility of your variables
$number = 10;

function example()
{
    // This doesnt work :
    echo $number;
}

// example();

// This doesnt work either :
function example2()
{
    $y = 5;
}
echo $y;

// Function with arguments
function greetings($firstName)
{
    echo 'Hello, welcome to our website ' . $firstName . '<br>';
}

greetings('simon');

$name = 'paul';
greetings($name);

function multiplyByTwo($x = 1)
{
    return $x * 2;
}

echo multiplyByTwo(3);
echo multiplyByTwo();
