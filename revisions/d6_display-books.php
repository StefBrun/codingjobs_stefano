<?php

// WORKING WITH DATABASE

// 1. Connect to the D.B.
$conn = mysqli_connect('localhost', 'root', '', 'library');

// True if you connected, false if not
if($conn) {
    echo 'Connected ! ';

    // 2. Prepare the query
    $query = 'SELECT * FROM books';

    // 3. Executing the query (send query to DB)
    $results = mysqli_query($conn, $query);

    // I retrieved results but I need to fetch before using them
    // 4. Fetch the results as an associative array
    $books = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // echo '<pre>';
    // var_dump($books);
    // echo '</pre>';

    foreach ($books as $book) {
        echo 'Title : ' . $book['title'] . '<br>';
        echo 'Sells : ' . $book['sells'] . '<br>';
        echo '<hr>';
    }

} else {
    echo 'Problem with connection !';
}

// Close the connection
mysqli_close($conn);