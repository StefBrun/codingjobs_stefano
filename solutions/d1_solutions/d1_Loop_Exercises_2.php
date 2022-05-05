<?php

/*
	- Exercise 1 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>1.03,"Tomato"=>2.3,"Oignon"=>1.85,"Red cabbage"=>0.85)
	    Write a script that will : 
	    1. Sort by value (try to look on google) and display the array
	    2. Sort by key in descending order and display the array
	    3. Use a loop to calculate the total of Michel spendings.

	*/

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);
//1. Sort by value 
asort($array);

echo '<pre>';
var_dump($array);
echo '</pre>';

// // 2. Sort by key in descending order
krsort($array);

echo '<pre>';
var_dump($array);
echo '</pre>';

// 3. Use a loop to calculate the total of Michel spendings.
$total = 0;
foreach ($array as $value) {
	$total += $value;
}

echo 'Total spendings : ' . $total . '<br>';


/*
	- Exercise 2 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.

		Do it by using a for loop.
		Once it's done, try to do it also with the while loop.
	*/

// Using For Loop
$numbers = array();

for ($i = 0; $i < 21; $i++) {
	$numbers[$i] = $i;
	/* What happens each lap of the loop :
		$i:0 / $numbers[0] = 0
		$i:1 / $numbers[1] = 1
		$i:2 / $numbers[2] = 2
		.... until reach 20
	*/
}

// Using While Loop
$numbers = array();
$x = 0;

while ($x < 21) {
	$numbers[$x] = $x;
	$x++;
}

/*
	-Exercise 3 :
		Use a loop to create an array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

$multiTable = array();

for ($i = 1; $i <= 10; $i++) {
	$multiTable[$i] = $i * 2;
}

echo '<pre>';
var_dump($multiTable);
echo '</pre>';

/*
	-Exercise 4 :
		Create an array of random numbers.
		You can create it manually. For example $array = [5, 20, 6, -6, 100]

		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
		You have to use loop + variable
	
		2. Find the position of the max/min also.

		3. CHALLENGE (optional)
		You can only use 2 variables ($array and $i doesn't count).
	*/

$array = [5, 20, 6, 2, 100];
$posMax = 0;
$posMin = 0;

foreach ($array as $key => $value) {
	if ($value > $array[$posMax])
		$posMax = $key;

	if ($value < $array[$posMin])
		$posMin = $key;
}

echo 'Maximum is : ' . $array[$posMax] . ' / Position is : ' . $posMax . '<br>';
echo 'Minimum is : ' . $array[$posMin] . ' / Position is : ' . $posMin . '<br>';
