<?php

$age = 27;
$salary = 30000;

//==================================
// Sample if
//==================================

if ($age === 20) {
    echo "one" . PHP_EOL;
}

//==================================
// Without circle braces
//==================================

if ($age === 20) {
    echo "one1" . PHP_EOL;
}

//==================================
// Sample if-else
//==================================

if ($age > 20) {
    echo "1" . PHP_EOL;
} else {
    echo "2" . PHP_EOL;
}

//==================================
// Difference between == and ===
//==================================

echo "<br>";
if ($age == 20) {
    echo "1" . "<br>";
}

if ($age === '20') {
    echo "2" . "<br>";
}
if ($age === 20) {
    echo "2" . "<br>";
}
/*
== doesnot bother about values.
=== also checked types after that printed
 */

//==================================
//if AND
//==================================

if ($age == 20 && $salary === 30000) {
    echo "Do somthing for good !" . '<br>';
}

//==================================
// if OR
//==================================

if ($age > 20 || $salary === 30000) {
    echo "Wow ! you did it." . '<br>';
}

//==================================
// Ternary if
//==================================

echo $age < 22 ? 'Young' : 'old';

// Short ternary
$myAge = $age ?: 28;
var_dump($myAge);
print_r($myAge);

//==================================
// Null coalescing operator
//==================================

echo "<br>";
$myName = isset($name) ? $name : 'Setu';
// $myName = $name ?? 'Setu';
print_r($myName) ;
echo "<br>";

//==================================
// switch
//==================================

$userRole = 'editor';
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default: 
        echo 'Unauthorised User';
        break;
}
