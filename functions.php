<?php

//It generates a function that given two numbers returns the sum of both
function sumNumbers($a,$b) {
    return $a+$b;
}

echo sumNumbers(3,2) . "<br><br>";

//It generates a function that given two numbers returns the multiplication of both

function multiplyNumbers($a,$b){
    return $a*$b;
}

echo multiplyNumbers(3,2) . "<br><br>";

//It generates a function that given two numbers returns the division of both

function divideNumbers($a,$b){
    return $a/$b;
}

echo divideNumbers(3,2) . "<br><br>";


//It generates a function that, given two numbers and an operation (add, multiply or divide),
// returns the result of that operation.
//Depending on the type of operation received by parameter, the function will execute the function 
//responsible for performing the operation, since you have previously implemented the function for 
//each operation separately.



function executeOperation($a){
    return $a;
}

echo executeOperation(sumNumbers(3,2)) . "<br><br>";
echo executeOperation(multiplyNumbers(3,2)) . "<br><br>";
echo executeOperation(divideNumbers(3,2)) . "<br><br>";


?>