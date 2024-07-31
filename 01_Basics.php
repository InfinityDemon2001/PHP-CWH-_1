<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP Tutorial</title>
    </head>
    
    <body>
        <div class = "container">
            This is my first PHP website.

            <?php 
                echo "<h1>Infinity</h1>";
                echo "Hello world and this is printed using PHP.";

                // Single line comment

                /*
                Multi Line comment
                */

                $variable1 = 34;
                $variable2 = 45;

                echo $variable1;
                Echo $variable2;
                echo $variable1 + $variable2;
            ?>
            
            <?php
                // Operators in PHP
                
                // 1. Arithmetic Operator
                echo "The value of varible1 + variable2 is ";
                echo "<br>";
                echo $variable1 + $variable2;
                echo "<br>";
                
                // 2. Assignment Operator
                $newVar = $variable1;
                $newVar += 1;
                
                // 3. Comparison Operator
                echo "The value of 1 == 4 is ";
                echo var_dump(1 == 4);
                echo "<br>";
                
                // 4. Increment/Decrement Operator
                echo $variable1 ++;
                echo -- $variable1;
                echo "<br>";
                
                // 5. Logical Operator
                $myVar = (true and false);
                echo var_dump($myVar);
                echo "<br>";
            ?>

            <?php
                define('pi', 3.14);
                
                // Data types in PHP
                echo "<h3>Data Types</h3>";
                
                // 1. String
                $var = "This is a string";
                echo var_dump($var);
                echo "<br>";

                // 2. Integer
                $var = 21;
                echo var_dump($var);
                echo "<br>";
                
                // 3. Float
                $var = 21.2001;
                echo var_dump($var);
                echo "<br>";
                
                // 4. Booalean
                $var = true;
                echo var_dump($var);
                echo "<br>";
                
                // 5. Array
                // 6. Object

                // Constant
                echo pi;
                echo "<br>";
            ?>
        </div>
    </body>
</html>