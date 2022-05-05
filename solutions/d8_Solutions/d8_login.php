<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
</head>

<body>
    <?php require_once 'nav.php'; ?>

    <h1>Log-in</h1>

    <?php

    if (isset($_POST['loginBtn'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
        $query = "SELECT * FROM users WHERE email = '$email'";
        $results = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($results);

        // Check if user exists in the DB
        if ($user != null) {
            // Compare password from the form and the one from database
            if (password_verify($password, $user['password'])) {
                echo 'Welcome user';
                setcookie('login', true, time() + (3600 * 24));
                // Redirect to home page :
                header('location: index.php');
            } else
                echo 'Password is wrong.';
        } else {
            echo 'Email not found. Try with another email.';
        }
    }

    ?>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Your email"><br>
        <input type="password" name="password" placeholder="Your password"><br>
        <input type="submit" name="loginBtn" value="Login">
    </form>
</body>

</html>