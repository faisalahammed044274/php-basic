<?php

// What is a variable
# variable stores some values
// Variable types
# $ start with a letter ex : 
/*
String, 
Integer, 
Float, 
Boolean, 
Null, 
Array, 
Object, 
Resource
*/

// Declare variables

$name = "setu"; 
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
//echo $name ."<br>". $age ."<br>".$height . "<br>"; 
// Print types of the variables

// echo gettype($name) . "<br>";
// echo gettype($age) . "<br>";
// echo gettype($isMale) . "<br>";
// echo gettype($height) . "<br>";
// echo gettype($salary) . "<br>";

// Print the whole variable
//var_dump($name, $age, $isMale, $height, $salary);
// Change the value of the variable
$name = false;
// Print type of the variable
echo gettype($name). "<br>";
// Variable checking functions
echo  is_string($name) . "<br>";
echo is_integer($age) . "<br>";
echo is_bool($isMale) . "<br>";
echo is_float($height) . "<br>";
echo is_double($height) . "<br>";
echo is_null($salary) . "<br>";
// Check if variable is defined
echo isset($name) . "<br>";
echo isset($add) . "<br>";
// Constants
define ("PI", 3.14);
echo PI. "<br>";
// Using PHP built-in constants
echo SORT_ASC . "<br>";
echo PHP_INT_MAX . "<br>";
