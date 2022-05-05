<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include_once 'nav.html';
    ?>

    <h1>My awesome page</h1>

    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quaerat quae ut incidunt blanditiis accusantium quia itaque praesentium inventore, nesciunt adipisci, necessitatibus quisquam labore non harum voluptates voluptas, maiores vitae.</p>
    </div>

    <?php
    // Include a file -> warning if errors
    include_once 'variables.php';

    // Require a file -> STOP the script if errors
    require_once 'functions.php';

    echo 'Your name is : ' . $var1;

    hello_world();

    ?>

    <?php
    include_once 'footer.html';
    ?>

</body>

</html>