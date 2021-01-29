<?php

//Create a simple condition that evaluates whether the current day is Monday. 
//Only in the case that the condition is met, it shows a message of “We are on Monday”.

$monday = "Monday";

if (date("l") == $monday ) {
    echo "<p>We are on $monday </p>";
} 

//Create a simple condition that evaluates whether the current month is October. 
//If the condition is met, it shows a message of the type "We are in October". 
//Otherwise, if this condition is not met, show the current month in words as it come from DateTime.

$october = "October";
if (date("F") == $october) {
    echo "<p>We are on $october</p>";
} else {
    echo date("F");
}


//Create a double condition that evaluates:
//If the current minute is less than 10. Displays a message of type 
//"the current minute is less than 10", if the current minute is greater 
//than 15, displays a message of the type "the current minute is more than 15". 
//If you do not meet any of the two conditions above: Displays a message of 
//the type "does not meet any conditions”

if (date("i")<10){
    echo "<p>The current minute is less than 10</p>";
} else if (date("i")>15){
    echo "<p>The current minute is more than 15</p>";
} else {
    echo "<p>Does not meet any conditions</p>";
}


//Create a switch type control structure to display a different message depending on 
//the current day of the week. You can write any type of message, because the important 
//thing is that you understand how it works and in what cases you can use it.

$weekday = date("l");

switch($weekday){
    case "Monday":
        echo "<p>Today is $weekday</p>";
        break;
    case "Tuesday":
        echo "<p>Today is $weekday</p>";
        break;
    case "Wednesday":
        echo "<p>Today is $weekday</p>";
        break;
    case "Thursday":
        echo "<p>Today is $weekday</p>";
        break;
    case "Friday":
        echo "<p>Today is $weekday</p>";
        break;
    case "Saturday":
        echo "<p>Today is $weekday</p>";
        break;
    case "Sunday":
        echo "<p>Today is $weekday</p>";
         break;  
    default:
        echo "<p>Incorrect day of the week</p>";
}


?>