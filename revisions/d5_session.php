<?php

/*
    SESSIONS

    - First : You need to start the session
    If it's the first time, you start a new session.
    If you already opened a session before, you can resume it.

*/

session_start();

// Add an element in my session
// $_SESSION['cart'] = 'tshirt';

var_dump($_SESSION);
var_dump($_COOKIE);
