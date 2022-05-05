<?php

$array = [5, 2, 3, 6, 7, 15];
FizzBuzz($array);

function FizzBuzz($array)
{

	foreach ($array as $key => $value) {
		if ($value % 3 == 0 && $value % 5 == 0)
			echo 'TicTac<br>';
		elseif ($value % 3 == 0)
			echo 'Fizz<br>';
		elseif ($value % 5 == 0)
			echo 'Buzz<br>';
		else
			echo $value . '<br>';
	}
}



/*

We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements. You can use this variable).

$array = [5, 2, 3, 6, 7];

Examples :

	Write a function call 'FizzBuzz'.
	For each number 'n' of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'TicTac'
		. else : display the number 'n'
		*/