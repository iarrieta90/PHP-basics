<?php

$a = 15;
$b = 26;

//Create an example of use for arithmetic operators: +, -, *, /, and%
echo var_dump($a + $b) . "<br>";
echo var_dump($a - $b) . "<br>";
echo var_dump($a * $b) . "<br>";
echo var_dump($a / $b) . "<br>";
echo var_dump($a % $b) . "<br><br>";

//Create a usage example for comparison operators: ==,! =, <,>, <=,> =
echo var_dump($a == $b) . "<br>";
echo var_dump($a != $b) . "<br>";
echo var_dump($a < $b) . "<br>";
echo var_dump($a > $b) . "<br>";
echo var_dump($a <= $b) . "<br>";
echo var_dump($a >= $b) . "<br><br>";

//Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
echo var_dump($a && $b) . "&& operator: True if both $a and $b are true <br>";
echo var_dump($a and $b) . "and operator: True if both $a and $b are true <br>";
echo var_dump($a || $b) . "|| operator: True if either $a or $b is true <br> <br>";
echo var_dump($a or $b) . "or operator: True if either $a or $b is true <br><br>";
echo var_dump(!$b) . "! (NOT) operator: True if $b is not true<br>";
echo var_dump($a xor $b) . "xor operator: True if either $a or $b is true, but not both<br>";


?>