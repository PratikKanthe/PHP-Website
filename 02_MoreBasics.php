<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Basics</title>
    <style>
        
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: black;
            background-color: white;
            --primary-color: #facc15;
        }
        /* dark theme */
        @media (prefers-color-scheme: dark) {
            body{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                color: white;
                background-color: black;
                --primary-color-2: #172554;
                --primary-color: var(--primary-color-2);
            }
        }
         
        .container{
            max-width: 80%;
            margin: 0 auto;
            background-color: var(--primary-color);
            padding: 3em;
            font-size: 1rem;
            line-height: 1rem;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>PHP More Basics</h1>
        <!-- php code starts here -->
        <?php 
            // if else statement
            $age = 18;
            if($age>=18){
                echo "<p style='font-weight: bold;'>You are eligible to create driving licence.</p>";
            }else if($age==7){
                echo "<p style='font-weight: bold;'>You are under age</p>";
            }else{
                echo "<p style='font-weight: bold;'>you are not eligible</p>";
            }

            $arrLanguages= array("HTML", "CSS", "JS", "React");

            //Loop
            $a=0;
            while ($a <= 10) {
                echo "<br>the value of a is: ";
                echo $a;
                $a++;
            }
            // for ($i=0; $i <=10 ; $i++) { 
            //     echo "<br> the value of i is: ";
            //     echo $i;
            // }
            echo "<br>";
            //iterating arrays in PHP using while loop
            $a=0;
            while ($a < count ($arrLanguages)) {
                echo "<br>The techonologies you need to know for frontend are: ";
                echo $arrLanguages[$a];
                $a++;
            }

            //array using foreach loop
            foreach ($arrLanguages as $key => $value) {
                echo "<br>value from foreach loop for arraay is: ";
                echo $value;
            }

            //functions in php
            function myFunction($num){
                echo "<br> your number is: ";
                echo $num;
            }
            myFunction(1);
        ?>
        <br>
        <!-- strings in php -->
        <?php 
            // string example with concatination
            $str = "four";
            $length = strlen($str);
            echo "<br>The length of the sting is: ".$length;
            echo "<br> The number of word is: ".str_word_count($str);
        ?>

    </div>
</body>
</html>