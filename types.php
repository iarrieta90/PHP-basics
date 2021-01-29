<?php

//Define a new variable and assign a value to each of the following types:
//boolean

$boolean = true;
echo var_dump($boolean) . "<br><br>";

//integer

$integrer = 5;
echo var_dump($integrer) . "<br><br>";

//float

$float = 5.2;
echo var_dump($float) . "<br><br>";

//string

$string = "hello";
echo var_dump($string) . "<br><br>";

//array

$array = array(1,2,"three",5==1,5);
echo var_dump($array) . "<br><br>";

//object
class MyClass 
{
  public $hello = "Hello";
};

$object = new MyClass();
echo var_dump($object) . "<br><br>";
echo $object -> hello . "<br><br>";

//NULL

$null = null;
echo var_dump($null) . "<br><br>";


?>