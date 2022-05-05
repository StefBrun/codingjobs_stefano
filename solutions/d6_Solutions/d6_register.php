<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>

    <?php
    $userName = '';
    $email = '';
    $errors = array();

    // Make sure I clicked on the submit btn
    if (!empty($_POST)) {
        $userName = htmlspecialchars(trim($_POST['username']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];



        // Username : mandatory
        if (empty($userName))
            $errors['username'] = 'Username is mandatory.';

        if (empty($email))
            $errors['email'] = 'Email is mandatory.';
        else if (!strpos($email, '@'))
            $errors['email'] = 'Email is not valid.';


        if (empty($password))
            $errors['password'] = 'Password is mandatory.';
        else if ($password != $_POST['cPassword'])
            $errors['password'] = 'Passwords are not matching.';


        // Inserts only if NO errors
        if (count($errors) == 0) {
            // 1. Connect to the D.B.
            $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

            // 2. Prepare the query
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users(username, email, password)
            VALUES('$userName', '$email', '$hashedPassword')";

            // 3. Executing the query (send query to DB)
            $result = mysqli_query($conn, $query);

            // When insert/update/delete, it returns true or false
            if ($result)
                echo 'Successfully inserted in the DB!';
            else
                echo 'Problem inserting into the DB.';

            mysqli_close($conn);
        } else {
            // This VS next to each input (cf below) 
            // foreach ($errors as $key => $value) {
            //     echo "$key : $value<br>";
            // }
        }
    }


    ?>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <?php if (isset($errors['username'])) echo $errors['username']; ?>
        <br>

        <input type="text" name="email" placeholder="Email">
        <?php if (isset($errors['email'])) echo $errors['email']; ?><br>

        <input type="password" name="password" placeholder="Password">
        <?php if (isset($errors['password'])) echo $errors['password']; ?><br>

        <input type="password" name="cPassword" placeholder="Confirm Password"><br>
        <input type="submit" name="registerBtn" value="Register">
    </form>

</body>

</html>