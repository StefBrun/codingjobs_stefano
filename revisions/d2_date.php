<?php

// Set the timezone
date_default_timezone_set('Europe/Luxembourg');

/*/*
    Timestamps
    number of seconds to identify a specific date

    Number of seconds between a specific date and the 1st January 1970
    Today's date : 09/07/2021 11h24
    Today's timestamp : 1625822707


*/

// Date() function

// Return today day's number
echo date('d') . '<br>';

// Return today month number
echo date('m') . '<br>';
echo date('M') . '<br>';

// Return today year number
echo date('Y') . '<br>';

// Return day and month
echo date('d m') . '<br>';

// Return today's date
echo date('d/F/Y') . '<br>';


// Mktime : convert a date into a timestamp
$timeStamp = mktime(11, 24, 00, 05, 10, 2021);

echo $timeStamp . '<br>';

// You can use date() function to convert timestamp to date()
echo date('d/F/Y', $timeStamp) . '<br>';

/*
    strtotime : will convert a date, o a string, into a timestamp.
*/
echo strtotime('now') . '<br>';
echo strtotime('next Thursday') . '<br>';
echo strtotime('+2 days') . '<br>';
echo strtotime('19 October 2001') . '<br>';


?>