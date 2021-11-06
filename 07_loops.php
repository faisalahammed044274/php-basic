<?php
//==================================
// while
//==================================

// while (true) {
//     //Don't use it on browser because
//     //it's make infinite loop which crushed your browser.
// }

//==================================
// Loop with $counter
//==================================

$counter = 0;
// while ($counter < 60) {
//     echo $counter . '<br>';
//     // if ($counter === 5){
//     //     break;
//     // }
//     $counter++;
// }
//==================================
// do - while
//==================================

// do {
//     echo $counter . '<br>';
//     $counter++;
// } while($counter < 20);

//==================================
// for
//==================================

for ($i = 0; $i < 10; $i++) {
    echo $i. '<br>';
}

//==================================
// foreach
//==================================

$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i .' '. $fruit . "<br>";
}

//==================================
// Iterate Over associative array.
//==================================
echo "<hr>";
$person = [
    'name' => 'Faisal',
    'surname' => 'Setu',
    'age' => 30,
    'hobbies' => ['Tennis','Video games'],
];

foreach ($person as $key => $value){
    if (is_array($value)){
    echo $key .' '. implode(",", $value) . "<br>";
} else {
    echo $key . ' ' . $value . '<br>';
}
}
