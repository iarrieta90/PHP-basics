<?php

//Define a simple array composed of text strings

$stringsArray = array("simple","array","composed","of","text","strings");
echo var_dump($stringsArray) . "<br><br>";


//Define a simple array consisting of whole numbers and decimal numbers

$numbersArray = array(1,2,3.5,0.2);
echo var_dump($numbersArray) . "<br><br>";


//Define a multidimensional array

$multidimensionalArray = array(1,2, array(3,4,5));
echo var_dump($multidimensionalArray) . "<br><br>";


//Execute the function that allows to obtain the length of an array

echo count(array(1,2,3,4,5)) . "<br><br>";



//Execute the function that allows to obtain the combination of two arrays

$a = array(1,2,3,4);
$b = array(5,6,7,8);
echo var_dump (array_merge($a, $b)) . "<br><br>";


//Execute the function that once is given an array return the last element of it

$numbers = array(3,25,5,11,7);
echo end($numbers) . "<br><br>";


//Execute the function that once is given an array add a new element to the array in question


$a = array(1,2,3);
array_push($a,34,62);
echo var_dump($a) . "<br><br>";

$b = array(1,2,3);
array_unshift($b,34,62);
echo var_dump($b) . "<br><br>";



?>