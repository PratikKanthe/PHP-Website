<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        <p>This is my first PHP Website</p>
        <?php 
            echo "This Text is From PHP";

            //variables in PHP
            $var1= 1;
            $var2= 1;
            $var3 = " Addition in PHP: ";
            echo $var3;
            echo $var1+$var2;
            echo "<br>";
            //Operators in PHP

            // Arithmetic Operators
            echo "sum of var1 and var2 is: ";
            echo $var1+$var2; //same for other
            echo "<br>";
            //assignment opration : already done above like we assign a variable
            echo $var2 += ++$var1;
            echo "<br>";

            // Comparison Operators
            echo "the value of 1==4 is: ";
            echo var_dump(1==4);
            echo "<br>";
            echo "the value of 1!=4 is: ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "the value of 1>=4 is: ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "the value of 1<=4 is: ";
            echo var_dump(1<=4);
            echo "<br>";
            // Increment/Decrement Operators
            // Logical Operators
        ?>
    </div>
</body>
</html>