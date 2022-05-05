<?php

if (isset($_POST['logoutBtn'])) {
    // Delete cookie for ever (will apply next time) :
    setcookie('login', false, time() - 3600);
    // Remove cookie from the current script
    unset($_COOKIE['login']);
}
?>

<nav>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="movies.php">Movies List</a>
        </li>

        <?php if (!isset($_COOKIE['login'])) : ?>
            <li>
                <a href="register.php">Register</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
        <?php else : ?>
            <li>
                <form method="POST">
                    <input type="submit" name="logoutBtn" value="Log out">
                </form>
            </li>
        <?php endif; ?>



    </ul>
</nav>