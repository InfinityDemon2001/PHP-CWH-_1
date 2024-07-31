<?php
    $str = "I am Infinity Demon";
    echo $str;
    echo "<br>";

    $len = strlen($str);
    // Concatentaion Operator
    echo "The length of the string is: ".$len." Thank you";
    echo "<br>";

    // Number of words
    echo "The number of words in this string is ".str_word_count($str)."<br>";

    // Reverse a string
    echo "The reversed string is: ".strrev($str)."<br>";

    // Index of a particular word
    echo "The search for 'Demon' is: ".strpos($str, "Demon")."<br>";

    // Replace a string
    echo "The replaced string is: ".str_replace("am", "am the", $str)."<br>";
?>