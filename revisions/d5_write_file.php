<?php

// In write mode, if the file doesn't exists, it will try to create it.
$file_handle = fopen("errors.txt", "w");
$file_content = "This is my contennnnnnnnnnt";

// Write inside the file
fwrite($file_handle, $file_content);

// Close the opened file
fclose($file_handle);

echo 'File created!';
