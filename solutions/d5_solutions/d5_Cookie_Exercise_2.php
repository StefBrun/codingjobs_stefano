<?php

// $_COOKIE['count']

// Should I reset ?
if (isset($_POST['resetBtn'])) {
    setcookie('count', 0, time() - 3600);
    unset($_COOKIE['count']);
}

// Check if my cookie 'count' exists
if (!isset($_COOKIE['count'])) {
    echo 'It\'s your first time on this page!';
    setcookie('count', 1);
    setcookie('first_visit', time());
} else {
    setcookie('count', $_COOKIE['count'] + 1);

    echo 'Number of visits on the page : ' . $_COOKIE['count'] . '<br>';
    echo 'Date of first visit : ' . date('d/m/Y H:i:s', $_COOKIE['first_visit']) . '<br>';
}

?>

<form method="post">
    <input type="submit" name="resetBtn" value="Reset">
</form>