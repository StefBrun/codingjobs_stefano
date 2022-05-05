<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Your email"><br>
        <input type="password" name="password" placeholder="Your password"><br>
        <input type="submit" value="Sign-in">
    </form>

    <?php

    if (!empty($_POST)) {

        $userFound = false;
        $file_handle = fopen('users.txt', 'r');

        while (!feof($file_handle)) {
            $current_line = fgets($file_handle);

            $userInfo = explode(';', $current_line);

            // Searching for the mail
            if (trim($_POST['email']) == trim($userInfo[0])) {
                if ($_POST['password'] == trim($userInfo[1])) {
                    echo 'Welcome user, you are allowed';
                } else {
                    echo 'Password is wrong.';
                }
                $userFound = true;
                break;
            }
        }

        if (!$userFound)
            echo 'Email not found.';

        fclose($file_handle);
    }
    ?>
</body>

</html>