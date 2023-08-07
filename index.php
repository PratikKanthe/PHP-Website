<?php 
    $insert = false;
    // set connection varaibles
    if(isset($_POST['name'])){
    $server = "localhost";
    $user   ="root";
    $pass   ="";

    // create a database connection
    $db     = mysqli_connect($server, $user, $pass);

    // check for connection success
    if (!$db) {
        die("Database connection failed: ". mysqli_connect_error());
    }
    // echo 'Connected to database <a href="http://localhost/firstphp/PHP-Website/index.html"> go home </a>';


    // sql query to collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `travel`.`travel` (`name`, `age`, `gender`, `email`, `number`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$number', '$other', '2023-08-07 16:52:37.000000');";
    // echo $sql;


    // execute the query
    if ($db->query($sql) == true) {
      $insert = true;
    }else{
      echo "ERROR: $sql <br> $db->error";
    }

    // close connection
    $db->close();
  }
?>

<!-- html code -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img src="bg.jpg" class="bg" alt="background" ismap />
    <div class="box">
    <div class="container">

      <!-- form -->
      <form action="index.php" method="post">
      <h1>Welcome To Travel Form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>

      <!-- submitted successfully message -->
      <?php 
        if($insert == true){
          echo "<p class='green'>
          Thanks for submitting the form. We are happy to see your joining us for
          the trip.
          </p>";
        }
      ?>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
          
        />
        <input type="number" name="age" id="age" placeholder="Enter your age" />
        <div class="gender">
           <label for="gender">select your gender:&nbsp;</label> <input type="radio" name="gender" value="male" /> Male&nbsp;
            <input type="radio" name="gender" value="female" /> Female&nbsp;
            <input type="radio" name="gender" value="female" /> Other&nbsp;
        </div>
        <input type="email" name="email" id="email" placeholder="Enter your email" />
        <input
          type="number"
          name="number"
          id="number"
          placeholder="mobile number"
        />
        <textarea
          cols="35"
          rows="7"
          name="other"
          id="other"
          placeholder="any suggestions?"
        ></textarea>
        <div class="row">
          <button class="btn">Submit</button>
          <input type="reset" class="btn">
        </div>
        <marquee direction="left"><p>Hurry up fill the form tomorrow itself!</p></marquee>
    </div>
</form>
    </div>
    <script src="index.js"></script>
  </body>
</html>
