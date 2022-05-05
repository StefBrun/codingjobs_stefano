<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <?php require_once 'nav.php'; ?>

    <h1>Register</h1>

    <?php
    $userName = '';
    $email = '';
    $errors = array();

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';

    // Make sure I clicked on the submit btn
    if (isset($_POST['registerBtn'])) {
        $userName = htmlspecialchars(trim($_POST['username']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];

        // Validations :
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

        // Is there some errors ?
        if ($_FILES['picture']['error'] != UPLOAD_ERR_OK)
            $errors['picture'] = 'Problem with the file. Try again.';

        $extFoundInArray = array_search($_FILES['picture']['type'], array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif'
        ));

        if ($extFoundInArray == false)
            $errors['picture'] = 'File must be an image !';

        // Inserts only if NO errors
        if (count($errors) == 0) {

            // First, try to save the file
            $fileName = $userName . '.' . $extFoundInArray; // simon.jpg
            $destinationPath = 'uploads/' . $fileName; // uploads/simon.jpg

            if (move_uploaded_file($_FILES['picture']['tmp_name'], $destinationPath)) {

                // 1. Connect to the D.B.
                $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

                // 2. Prepare the query
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO users(username, email, password, picture)
                VALUES('$userName', '$email', '$hashedPassword', '$fileName')";

                // 3. Executing the query (send query to DB)
                $result = mysqli_query($conn, $query);

                // When insert/update/delete, it returns true or false
                if ($result)
                    echo 'Successfully inserted in the DB!';
                else
                    echo 'Problem inserting into the DB.';

                mysqli_close($conn);
            } else {
                $errors['picture'] = 'Problem saving the file.';
            }
        } else {
            // This VS next to each input (cf below) 
            // foreach ($errors as $key => $value) {
            //     echo "$key : $value<br>";
            // }
        }
    }


    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Username" value="<?= $userName; ?>">
        <?php if (isset($errors['username'])) echo $errors['username']; ?>
        <br>

        <input type=" text" name="email" placeholder="Email">
        <?php if (isset($errors['email'])) echo $errors['email']; ?><br>

        <input type="password" name="password" placeholder="Password">
        <?php if (isset($errors['password'])) echo $errors['password']; ?><br>

        <input type="password" name="cPassword" placeholder="Confirm Password"><br>

        Select profile picture :<br>
        <input type="file" name="picture">
        <?php if (isset($errors['picture'])) echo $errors['picture']; ?><br>

        <input type="submit" name="registerBtn" value="Register">
    </form>

</body>

</html>