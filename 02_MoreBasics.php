<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP Tutorial</title>
    </head>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 80%;
            background-color: rgb(228, 195, 195);
            margin: auto;
            padding: 23px;
        }
    </style>

    <body>
        <div class = "container">
            <h1>Lets learn about PHP.</h1>

            <p>Your party status is here:</p>

            <?php
                $age = 34;

                if($age > 18) {
                    echo "You can go to the party.";
                }
                else if($age == 7) {
                    echo "You are seven years old.";
                }
                else {
                    echo "You cant go to the party.";
                }

                echo "<br>";

                // Arrays
                $languages = array("Python", "C++", "PHP", "NodeJS");
                echo $languages[0];
                echo "<br>";
                echo count($languages);
                echo "<br>";

                // Loops
                $a = 0;
                while($a <= 10) {
                    echo "<br>The value of a is: ";
                    echo $a;
                    $a ++;
                }
                echo "<br>";

                // while loop
                $a = 0;
                while($a < count($languages)) {
                    echo "<br>The value of language is: ";
                    echo $languages[$a];
                    $a ++;
                }
                echo "<br>";

                // do while is same as C++

                // for loop
                for($a = 1; $a <= 10; $a ++) { 
                   echo "<br>The value of a is: "; 
                   echo $a; 
                }
                echo "<br>";

                foreach($languages as $values) {
                    echo "<br>The value of language is: ";
                    echo $values;
                }
                echo "<br>";

                function print_num($num) {
                    echo "Your number is: ";
                    echo $num;
                    echo "<br>";
                }

                print_num(21);
            ?>
        </div>
    </body>
</html>