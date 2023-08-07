<?php 
    $server = "localhost";
    $user   ="root";
    $pass   ="";
    $db     = mysqli_connect($server, $user, $pass);

    if (!$db) {
        die("Database connection failed: ". mysqli_connect_error());
    }
    echo 'Connected to database <a href="http://localhost/firstphp/PHP-Website/index.html"> go home </a>';


    // sql query
    $name = ['name'];
    $age = ['age'];
    $gender = ['gender'];
    $email = ['email'];
    $number = ['number'];
    $other = ['other'];
    $sql = "INSERT INTO `travel` (`name`, `age`, `gender`, `email`, `number`, `other`, `dt`) VALUES ('1', 'name', '18', 'Male', 'abc@gmail.com', '9876543210', 'this is feedback', '2023-08-07 16:52:37.000000');";
    echo $sql;
?>