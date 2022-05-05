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
        // $atkPoints = 10;
        // $defPoints = 5;

        $characteristics = array(
                "atkPoints" => 10,
                "defPoints" => 5
        );

        ?>

        <!-- Display Character Informations  -->
        <img src="<?php echo $image; ?>" width="100px">
        <p>Last Name : <?php echo $lastName; ?></p>
        <p>First Name : <?php echo $firstName; ?></p>

        <?php

        foreach ($characteristics as $key => $value) {
                echo "<p>$key : $value</p>";
        }


        if ($characteristics["atkPoints"] > 9 or $characteristics["defPoints"] > 9) {
                echo '<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.
	    </div>';
        } else if ($characteristics["atkPoints"] < 5 or $characteristics["defPoints"] < 5) {
                echo '<div class="alert">
        <strong>Wait !</strong> Your charachter is too weeeakk!
    </div>';
        }

        ?>

</body>

</html>