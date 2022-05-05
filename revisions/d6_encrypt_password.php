<?php

/*
    ENCRYPTION:

    It is necessary to hash your password before storing it in the DB.
*/

// Assume we know this password : 
$password = '1234';

// DO NOT USE THOSE FUNCTIONS (weak/old algorithm)
// $pwd = sha1($password);
// $pwd = md5($password);

// Password hash will encrypt your password using the bcrypt() algorithm
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
// It generates a 60 char. long string
echo $hashed_password;

echo '<hr>';

// Check if password match
if (password_verify('1234', $hashed_password))
    echo 'Password matches !';
