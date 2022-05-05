<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Exercise 3</title>
</head>

<body>
    <?php
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';
    $lastName = '';
    $firstName = '';
    $email = '';

    // Make sure I clicked on the submit btn

    if (!empty($_POST)) {
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];

        $errors = false;

        // First name & Last name : mandatory
        if (empty($_POST['lastName'])) {
            echo 'Lastname is mandatory<br>';
            $errors = true;
        }

        if (empty($_POST['firstName'])) {
            echo 'Firstname is mandatory<br>';
            $errors = true;
        }

        if (strlen($_POST['email']) < 8 || strlen($_POST['email']) > 50) {
            echo 'Email must be between 8 and 50 characters<br>';
            $errors = true;
        }

        if (strlen($_POST['password']) < 8) {
            echo 'Password must be at least 8 characters<br>';
            $errors = true;
        } else if ($_POST['password'] != $_POST['cPassword']) {
            echo 'Passwords are not matching<br>';
            $errors = true;
        }

        // Is there any errors ?  
        if (!$errors) {
            echo 'Last name : ' . $_POST['lastName'] . '<br>';
            echo 'First name : ' . $_POST['firstName'] . '<br>';
            echo 'Email: ' . $_POST['email'] . '<br>';
        }
    }

    ?>
    <form action="" method="post">
        <input type="text" name="lastName" placeholder="Your last name" value="<?php echo $lastName; ?>"><br>
        <input type="text" name="firstName" placeholder="Your first name" value="<?php echo $firstName; ?>"><br>
        <input type="text" name="email" placeholder="Your email" value="<?php echo $email; ?>"><br>
        <input type="text" name="password" placeholder="Your password"><br>
        <input type="text" name="cPassword" placeholder="Confirm your password"><br>
        <input type="checkbox" name="newsletter">
        <label for="newsletter">Subscribe to the newsletter</label><br>
        <input type="submit" value="Sign-in">
    </form>
</body>

</html>