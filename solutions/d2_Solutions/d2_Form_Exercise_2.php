<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	// Only if we clicked
	if (!empty($_POST)) {
		if (is_numeric($number)) {
			$number = $_POST['num'];
			$multiTable = array();

			// Calculate the multiplication table
			for ($i = 1; $i <= 10; $i++) {
				$multiTable[$i] = $i * $number;
			}

			// Display the multiplication table
			echo '<ul>';
			foreach ($multiTable as $key => $value) {
				echo "<li>$key * $number = $value</li>";
			}
			echo '</ul>';
		} else {
			echo 'Must be a numeric value !';
		}
	}

	?>

	<form action="" method="post">
		<input type="number" name="num" placeholder="Your number"><br>
		<input type="submit" value="Multiply">
	</form>
</body>

</html>