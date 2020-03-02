<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'hospital');
    define('DB_PASSWORD', 'Dhruv@321');
    define('DB_NAME', 'hospitalmangsystem');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>
</body>

</html>