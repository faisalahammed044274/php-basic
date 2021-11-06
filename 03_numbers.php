<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations
echo ($a + $b) * $c . "<br>";
echo ($a - $b) . "<br>";
echo ($a * $b) . "<br>";
echo ($a / $b) . "<br>";
echo ($a % $b) . "<br>";

echo "<br>";

// Assignment with math operators
$a += $b; echo $a . "<br>";
$a -= $b;  echo $a . "<br>";
$a *= $b;  echo $a . "<br>";
$a /= $b;  echo $a . "<br>";
$a %= $b;  echo $a . "<br>";
echo "<br>";
// Increment operator
$a = 7;
echo $a ."<br>";
$a++; // Pre
$a++;
echo $a ."<br>";
++$a; //Post
++$a;
++$a;
echo $a ."<br>";
// Decrement operator
echo $a-- . "<br>";
echo --$a . "<br>";
//Number checking functions
echo is_float(1.65) . "<br>";
echo is_double(5.98) . "<br>";
echo is_integer(4) . "<br>";
echo is_int(75) . "<br>";
echo is_numeric("3g.75") ."<br>";
echo is_numeric("3.75") ."<br>";
// Conversion
$strNumber = "21.73";
echo $number = (float)$strNumber;
var_dump($number);
// Number functions
echo "abs(-15)" . abs(-15) , '<br>';
echo "pow(2,3)" . pow(2,3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "max(2,3)" . max(2, 3) . '<br>';
echo "min(2,3)" . min(2, 3) . '<br>';
echo "round(2.3)" . round(2.3) . '<br>';
echo "round(2.4)" . round(2.4) . '<br>';
echo "floor(2.6)" . floor(2.6) . '<br>'; //Round down
echo "ceil(2.4)" . ceil(2.4) . '<br>'; //ROund up 

// Formatting numbers

$number = 123456789.12345; //
echo number_format($number, 3, ',','')


// https://www.php.net/manual/en/ref.math.php
?>