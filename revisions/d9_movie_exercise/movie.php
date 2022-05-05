<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 1. Connect to the D.B.
    include_once 'database.php';
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    // 2. Prepare the query
    $query = 'SELECT * 
    FROM movies INNER JOIN directors ON directors.id = movies.director_id 
    WHERE movies.id = ' . $id;

    // 3. Executing the query (send query to DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch
    $movie = mysqli_fetch_assoc($results);
} else {
    // Display and stop the script.
    die('Something wrong.');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include_once 'nav.php'; ?>

    <img src="<?= $movie['poster']; ?>" width="200px">

    <p>
        <strong>Title :</strong>
        <?= $movie['title']; ?>
    </p>

    <p>
        <strong>Views :</strong>
        <?= $movie['views']; ?>
    </p>

    <p>
        <strong>Director :</strong>
        <?= $movie['name']; ?>
    </p>

</body>

</html>