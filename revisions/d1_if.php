<?php
// 1. IF Syntax
$a = 5;

if ($a == 6) {
    echo 'Equal to 6';
} else if ($a ==5) {
    echo 'Equal to 5';
} else {
    echo 'Not equal to 6 or 5';
}



if ($a == 6) {
    echo 'Equal';
} else {
    echo 'Not equal to 6';
}

// Only if you have ONE insctructions in the if
if ($a == 6)
    echo 'Equal';
else
    echo 'Not equal to 6';

// 2. Compare operators
$a = 2;
$b = '2';

// same value
if($a == $b) // return true

// same value & type
if($a === $b) // return false

// Not equal
if($a != $b) // return false

// Not same value OR not same type
if($a !== $b) // return true

// Greater / Lower than
if($a < $b) // Lower than
if($a <= $b) // Lower or equal than
if($a > $b) // Greater than
if($a >= $b) // Greater or equal than

// 3. Logical Operator
// AND &&
if($a == 5 && $b == 6)
if($a == 5 AND $b == 6)

// OR ||
if($a == 5 || $b == 6)
if($a == 5 OR $b == 6)

// XOR
if($a == 2 XOR $b == 1)
// returns true IF only one of the condition is true. Not both at the same time.