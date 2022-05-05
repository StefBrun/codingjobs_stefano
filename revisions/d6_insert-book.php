<?php

// WORKING WITH DATABASE

// 1. Connect to the D.B.
$conn = mysqli_connect('localhost', 'root', '', 'library');

// True if you connected, false if not
if($conn) {
    echo 'Connected ! ';

    // 2. Prepare the query
    $query = 'INSERT INTO books(title, price, date_of_release, sells, author_id)
    VALUES("HP whatever", 5,"1989-01-20", 8754511, 2)';

    // 3. Executing the query (send query to DB)
    $result = mysqli_query($conn, $query);

    // When insert/update/delete, it returns true or false
    if($result)
        echo 'Successfully inserted in the DB!';
    else
        echo 'Problem inserting into the DB.';

} else {
    echo 'Problem with connection !';
}

// Close the connection
mysqli_close($conn);

?>