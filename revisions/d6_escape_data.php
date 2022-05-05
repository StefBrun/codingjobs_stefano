<?php


/*
    Cleaning data.

    User data can be manipulated in many ways by malicious person through the url or the form.

    You have to reduce the risk for the website : 
        - Clean data
        - Validate data
        - Escape data before sending to the DB
        - Escape before sending to the client
    
            
    Let's have an example (movie exercise).
    For detail page we use GET method to pass the id of the movie
    
    localhost/movie.php?id=5

    A user can try to acces the page doing something like this :
    movie.php?id=1;select * from users;

*/

/*
    All GET/POST data are processed initially like strings, so, you have to check for numeric values (not just integer).
*/

// Check if ID exists
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT * FROM movies WHERE id = $id";

    if (!is_numeric($id))
        echo 'Something is wrong. Contact administrator or try later.';
    else
        echo $query;
} else {
    echo 'Problem, try to contact administrator';
}
