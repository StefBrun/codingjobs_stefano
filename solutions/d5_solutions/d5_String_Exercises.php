<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
    - Exercise 1 :
        1. Create an HTML form with a text field in a PHP script. The form will point to the same page.
        2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase.
        3. Create a second `submit` button, which displays the string entered in lowercase
	
*/
?>

<form action="" method="POST">
    <input type="text" name="myInput" placeholder="Type some text"><br>
    <input type="submit" name="lcBtn" value="Lower Case">
    <input type="submit" name="ucBtn" value="Upper Case">
</form>

<?php

// Did I clicked on one of the buttons ?
if (isset($_POST['lcBtn'])) {
    echo '<div>' . strtolower($_POST['myInput']) . '</div>';
} else if (isset($_POST['ucBtn'])) {
    echo '<div>' . strtoupper($_POST['myInput']) . '</div>';
}



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
    - Exercise 2 :
        Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence:
        $sentence = "This is a random sentence";
*/

$sentence = "This is a random sentence";
echo str_replace("random", "beautiful", $sentence);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
    - Exercise 3 :
    Write a PHP script that displays the last word of a sentence using 2 functions:
        explode () and count ()
    
    You can use the previous sentence to test : $sentence = "This is a random sentence";
*/
$sentence = "This is a random sentence";

$myArray = explode(' ', $sentence);
$lastPos = count($myArray) - 1;
echo $myArray[$lastPos];
