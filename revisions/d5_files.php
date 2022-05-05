<?php

// Read a file (but no nice format style)
// $file_content = readfile("movies.txt");
// echo $file_content;

// Another function to read a file.
// $file_content = file_get_contents("movies.txt");
// echo $file_content;

// Check if a file exists
if (file_exists("movies.txt")) {
    // Open the file (remember the location)
    $file_handle = fopen("movies.txt", "r");

    // Read the file
    while (!feof($file_handle)) {
        $current_line = fgets($file_handle);
        echo $current_line . '<br>';
    }

    // echo fread($file_handle, filesize('movies.txt'));

    // Close the opened file
    fclose($file_handle);
} else {
    echo "File doesn't exists";
}
