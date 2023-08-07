<?php 
    $server = "localhost";
    $user   ="root";
    $pass   ="";
    $db     = mysqli_connect($server, $user, $pass);

    if (!$db) {
        die("Database connection failed: ". mysqli_connect_error());
    }
    echo "Connected to database";
?>