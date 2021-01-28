<?php

//Instance the Date Time class and then invoke the format method with 
//the argument “Y-m-d” to show year-month-day

$date = date_create("28-Jan-2021");
echo date_format($date, "Y-m-d") . "<br><br>";


//Get the current date in any format

$date = date_create();
echo date_timestamp_get($date) . "<br><br>";


//Get the current day
echo date("l j") . "<br><br>";


//Get the current month in numerical format (1-12)

echo date("m") . "<br><br>";

//Get the current minute with leading zeros (00 - 59)

echo date("i") . "<br><br>";


?>