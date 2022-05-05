<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.alert {
			color: red;
		}
	</style>
</head>

<body>
	<?php

	// Make sure I clicked
	if (isset($_POST['exo1Btn'])) {
		// Check if email contains an @symbol
		if (strpos($_POST['email'], '@'))
			echo '<span style="color:green">Email is valid !</span>';
		else
			echo '<span class="alert">Email is not valid!</span>';
	}

	?>
	<form action="" method="POST">
		<input type="text" name="email" placeholder="Your email"><br>
		<input type="text" name="password" placeholder="Your password"><br>
		<input type="submit" name="exo1Btn" value="Send">
	</form>

	<hr>

	<?php

	// Make sure I clicked
	if (isset($_POST['exo2Btn'])) {
		$timestampNow = strtotime('now');
		$timestampForm = strtotime($_POST['datepicker']);
		echo 'Difference in timestamp : ' . ($timestampNow - $timestampForm);
	}

	?>
	<form action="" method="POST">
		<input type="date" name="datepicker"><br>
		<input type="submit" name="exo2Btn" value="Send">
	</form>
</body>

</html>