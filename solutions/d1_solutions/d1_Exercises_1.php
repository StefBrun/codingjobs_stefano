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
    $image = "banana.png";
    $lastName = "Banana";
    $firstName = "Guy";
    $atkPoints = 10;
    $defPoints = 5;

    // First way : handle displaying in PHP
    // echo '<p>Last name : ' . $lastName . '</p>';
    // echo '<p> First name : ' . $firstName . '</p>';
    ?>

    <!-- Second way : Mix of HTML and PHP  -->
    <img src="<?php echo $image; ?>" width="100px">
    <p>Last Name : <?php echo $lastName; ?></p>
    <p>First Name : <?php echo $firstName; ?></p>
    <p>Atk points : <?php echo $atkPoints; ?></p>
    <p>Def points : <?php echo $defPoints; ?></p>

    <?php
    if ($atkPoints > 9 or $defPoints > 9) {
        echo '<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.
	    </div>';
    } else if ($atkPoints < 5 or $defPoints < 5) {
        echo '<div class="alert">
        <strong>Wait !</strong> Your charachter is too weeeakk!
    </div>';
    }

    ?>

</body>

</html>