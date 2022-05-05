<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    "The first number is higher" (if the first number is higher than the second number)
    "The first number is smaller" (if the first number is smaller than the second number)
    "The two numbers are identical" (if the two numbers are equal)

*/

function whichIsHigher($a, $b)
{
	if ($a > $b)
		echo 'The first number is higher';
	else if ($a < $b)
		echo 'The first number is lower';
	else
		echo 'The first number is equal';
}

whichIsHigher(2, 6);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*

-- Exercice 2
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

function htmlImage($src)
{
	echo "<img src='$src' alt='' width='100px'>";
}

htmlImage('banana.png');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise.
	    - Calculates the sum of Michel's expenses (already done)
	3.2
	Write a function that will:
	- Take an array as argument
	- Calculate the sum of the expenses of the array
	- return the sum

*/

function sum_expenses($array)
{
	$total = 0;
	foreach ($array as $value) {
		$total += $value;
	}

	return $total;
}



$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);
$array2 = array(10, 5, 90, 100);

echo 'Sum of first array is : ' . sum_expenses($array);
echo 'Sum of second array is : ' . sum_expenses($array2);






echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as arguments.
    - That returns the result of the multiplication of the two numbers
    - All arguments must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

function default_example($num1 = 1, $num2 = 1)
{
	return $num1 * $num2;
}

echo default_example(10, 2) . '<br>';
echo default_example(4) . '<br>';




echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

//kayak
function isPalindrome($string)
{
	$len = strlen($string) - 1;

	for ($i = 0; $i < $len / 2; $i++) {
		// COMPARE LEFT SIDE with RIGHT SIDE
		if ($string[$i] != $string[$len - $i]) {
			return 'its not a palindrome';
		}
	}

	return 'its a palindrome';
}

echo isPalindrome('kayak');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercice 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

echo isPrime(13);

function isPrime($num)
{
	for ($i = 2; $i < $num / 2; $i++) {
		if ($num % $i == 0)
			return 'Not a prime number';
	}

	return 'It is a prime number';
}



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercise 7.5 : 

Given two variables $a = 5 and $b = 3
You need to write a script that switch the values
Final result expected : 

$a = 3;
$b = 5;

$c = $a;
$a = $b;
$b = $c;


-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.


	*/
$array = [20, 9, 100, -5];

function reverse($array)
{
	for ($i = 0; $i < count($array) / 2; $i++) {
		$c = $array[count($array) - $i - 1];
		$array[count($array) - $i - 1] = $array[$i];
		$array[$i] = $c;
	}

	return $array;
}

echo '<pre>';
var_dump(reverse($array));
echo '</pre>';
