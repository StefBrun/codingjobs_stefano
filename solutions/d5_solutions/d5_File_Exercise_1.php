<?php

/*
	Create a script that saves in the last_access.log file the timestamp of this time (now).

	We will replace the old timestamp.

	Choose the right setting to open the file
	*/


$now = strtotime('now');
$file_handle = fopen('last_access.log', 'w');
fwrite($file_handle, $now);
fclose($file_handle);
