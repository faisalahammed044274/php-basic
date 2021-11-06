<?php

// Create array
$fruits = ["Mango", "Orange", "Banana", "Watermelon"];

// Print the whole array
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Get element by index
echo $fruits[2] . "<br>";
// Set element by index
$fruits[1] = 'Apple';
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Check if array has element at index 2
isset($fruits[3]);
// Append element
$fruits [] = 'Banana';
echo '<pre>';
var_dump($fruits); // it append in the array;
echo '</pre>';
// Print the length of the array
echo count($fruits) . '<br>'; //It'll shown the array length

// Add element at the end of the array
array_push($fruits,'foo'); //it'll add in the last element
var_dump($fruits);
echo '<pre>';

// Remove element from the end of the array
echo array_pop($fruits); //  it'll remove the last array
var_dump($fruits);
// Add element at the beginning of the array
array_unshift($fruits, 'bar'); //It'll get the 1st place 
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Remove element from the beginning of the array
echo array_shift($fruits);
var_dump($fruits);
// Split the string into an array
$string = 'Banana, Apple, Peach';
var_dump(explode(",", $string));
// Combine array elements into string
var_dump (implode("&", $fruits));
// Check if element exist in the array
var_dump(in_array('go', $fruits));
// Search element index in the array
var_dump(array_search('Apple', $fruits));
// Merge two arrays
$vegetables = ["potato", "cucumber"];
var_dump(array_merge($fruits, $vegetables));

var_dump([...$fruits , ...$vegetables]); //need 7.4 php version

// Sorting of array (Reverse order also)
var_dump($fruits);
sort($fruits);
var_dump($fruits);
rsort($fruits);
var_dump($fruits);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Faisal Ahammed',
    'surname' => 'Setu',
    'age' => 28,
    'hobbies' => ['Travelling', 'Coding', 'Enjoying Nature'],
];
var_dump($person);
print_r($person);
// Get element by key
echo $person['name'] . '<br>';
// Set element by key
$person['hometown'] = 'Joypurht';
var_dump($person);

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'Unknown';
} 
var_dump($person);


$person['road no'] = $person['road no'] ?? 'Unknown';
var_dump($person);
$person['house no'] ?? 'Unknown';
var_dump($person);
// Check if array has specific key

// Print the keys of the array
var_dump(array_keys($person));

// Print the values of the array
var_dump(array_values($person));
// Sorting associative arrays by values, by keys
ksort($person);
var_dump($person);
print_r($person);
asort($person);
var_dump($person);
print_r($person);

// Two dimensional arrays

$todos = [
    ['title' => 'To do title 1', 'completed' => true],
    ['title' => 'To do title 2', 'completed' => false],
    ['title' => 'To do title 3', 'completed' => !false],
    ['title' => 'To do title 3', 'completed' => !true],
];

var_dump($todos);