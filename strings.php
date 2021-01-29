<?php

//Print a text string

echo "<p>Print a text string</p>";


//Print a text string that interpret variables

$a = "string variable";
$b = 3+7; 

echo "<p>Print a text string that interprets variables: $a $b</p>";


//Concatenate a previously declared variable in a text string

$variable = "variable";
echo "concatenated, previously declared " . $variable . "<br><br>";


//Execute the function that allows you to replace text in a string (case sensitive)

echo str_replace("world","Rick","Hello world") . "<br><br>";


//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)

echo str_ireplace("World","Rick","Hello world") . "<br><br>";


//Execute the function that allows you to write a text N times

echo str_repeat("Hello world ", 5) . "<br><br>";


//Execute the function that allows to obtain the length of a text string

echo strlen("Hello world") . "<br><br>";


//Executes the function that allows to obtain the position of the first occurrence of a text within a text string

echo stripos("Hello world, hello world again", "world") . "<br><br>";


//Execute the function that allows a text string to be capitalized

echo ucfirst("hello world") . "<br><br>";


//Execute the function that allows you to transform a text string to lowercase

echo strtolower("HELLO WORLD") . "<br><br>";


//Execute the function that allows to obtain a text substring from the position

echo substr("Hello world", 4) . "<br><br>";


?>