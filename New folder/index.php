<?php

/*
	1. Display the type of each variable at the end of the script (using only one function)

*/
 
$x = 5; //integer  
$y = "1"; // string
$z = true; // boolean
$n = 2.5;
$z = $x + $y;
$k = $n * $y;

echo gettype($x) . '<br>'; // get type of the variable
/*
	Show the date (in a nice format) for :
*/
echo 'Today : ' . date('d/m/Y') . '<br>';
echo 'Tomorrow : ' . date('d/m/Y', strtotime('+1 day')) . '<br>';
echo 'One month later : ' . date('d/m/Y', strtotime('+1 month')) . '<br>';

/*	Create an array with the numbers from 1 to 100
	display it in a HTML list (ul/li) + loop
*/
// Create and loop array  : 
$array = array();
for ($i = 0; $i <= 100; $i++) {
	$array[] = $i;
}

// Display array in userlist : 
echo '<ul>';
foreach ($array as $value) {
	echo '<li>' . $value . '</li>';
}
echo '</ul>';

/*
	Practice query using the moviedb :
	1. Connect to DB and choose the moviedb
	2. Go to SQL tab and run a query to get all movies by George Lucas
	3. Display the movies in a HTML <table>
		You should display title, views, the poster and the name of the director.
*/

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'movie_db'); 
$query = 'SELECT * 
FROM movies 
INNER JOIN directors ON movies.director_id = directors.id -- innerjoin
WHERE name = "George Lucas"'; 
$result = mysqli_query($conn, $query); 
$movies = mysqli_fetch_all($result, MYSQLI_ASSOC); 

?>


<!--  table  -->
<table border="1px">
	<tr>
		<th>Title</th>
		<th>Views</th>
		<th>Director</th>
	</tr>

<!-- schow in each case, take movies db and put it in each case -->
	<?php foreach ($movies as $movie) : ?>
		<tr>
			<td><img src="<?= $movie['poster']; ?>" width="100px"></td>
			<td><?= $movie['title']; ?></td>
			<td><?= $movie['views']; ?></td>
			<td><?= $movie['name']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>






<?php 


$array = array(
	'lastname' => 'simon',
	'firstname' => 'simon',
	'phone' => '+3526455748',
	'mail' => 'simon@simon.fr',
	'address' => '6 rue de la gare',
	'city' => 'Mondelange'
	);
	
	foreach ($array as $key => $value) {
		echo $key . ' : ' . $value . '<br>';
	}

	// Declare function
function multiplicationTable($x)
{
	if (!is_numeric($x)) // impose numbers
		return false;

	$table = array(); // 1-20
	for ($i = 1; $i <= 20; $i++) {
		$table[$i] = $i * $x; //multiply by number 
	}

	return $table;


}
// Using the function if we click on the submit button
if (isset($_POST['multiplyBtn'])) { //if button is pushed
	$result = multiplicationTable($_POST['number']);  // take result, take table, 
	if ($result == false)
		echo 'Must be a number !';
	else {
		echo '<table border=1>';
		foreach ($result as $key => $value) {
			echo '<td>' . $key . '*' . $_POST['number'] . '=' . $value . '</td>';
		}
		echo '</table>';
	}
}
?><form method="post">
	<input type="text" name="number" placeholder="Your number"><br>
	<input type="submit" name="multiplyBtn" value="Multiply">
</form>


<?php 
function whichIsGreater($x, $y)
{
	//if not number return string
	if (!is_numeric($x) or !is_numeric($y)) {
		return 'Both arguments should be numbers !';
	}
//greater lower equal than
	if ($x > $y)
		return "x=$x is greater than x=$y";
	elseif ($x < $y)
		return "x=$x is lower than x=$y";
	else
		return "x=$x is equal to x=$y";
}


echo whichIsGreater(5, 10) . '<br>';
echo whichIsGreater(5, 'hello') . '<br>';$




$contact = array(
	0 => array(
		'name' => 'ricardo',
		'phone' => '036487487',
		'email' => 'ricard@gmail.com'
	),
	1 => array(
		'name' => 'emmanuel',
		'phone' => '03644287487',
		'email' => 'manu@gmail.com'
	),
	2 => array(
		'name' => 'john',
		'phone' => '036492377',
		'email' => 'john@gmail.com'
	)
);

foreach ($contact as $key => $c) {
	echo '<strong>' . ucfirst($c['name']) . ' informations' . '</strong><br>';
	echo 'Phone : ' . $c['phone'] . '<br>';
	echo 'Mail : ' . $c['email'] . '<br>';
	echo '<br>';
}

/*
	-- Exercise 3 :
	
	Based on Exercise 2

	Create a function that :
		- Expect a name(string) as argument
		- Look in the array if you find a contact matching the name
		- If yes, display informations about it
		- If no, display a message saying 'No results matching your search'
*/

function searchContact($name)
{
	$contact = array(
		0 => array(
			'name' => 'ricardo',
			'phone' => '036487487',
			'email' => 'ricard@gmail.com'
		),
		1 => array(
			'name' => 'emmanuel',
			'phone' => '03644287487',
			'email' => 'manu@gmail.com'
		),
		2 => array(
			'name' => 'john',
			'phone' => '036492377',
			'email' => 'john@gmail.com'
		)
	);

	$search = false;
	foreach ($contact as $c) {
		if ($c['name'] == $name) {
			$search = $c;
			break;
		}
	}

	if ($search == false)
		echo 'No results matching your search';
	else {
		foreach ($search as $key => $value) {
			echo $key . ' = ' . $value . '<br>';
		}
	}
}

searchContact('ricardo');

 ?>
