<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <?php require_once 'header.html'; ?>

    <form action="" method="post">
        <input type="text" name="firstName" placeholder="Your first name"><br>
        <input type="text" name="lastName" placeholder="Your last name"><br>
        <input type="text" name="email" placeholder="Your email"><br>
        <input type="text" name="password" placeholder="Your password"><br>
        <input type="submit" value="Register">
    </form>

    <?php require_once 'footer.html'; ?>
</body>

</html>