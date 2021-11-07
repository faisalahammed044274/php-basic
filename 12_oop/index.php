<?php

// What is class and instance
class Person{
    public $fullname;

    public $surname;

    public $age;
}

$p = new Person();
var_dump($p);

$p->fullname = "Faisal Ahammed";
$p->surname = "Setu";
$p->age = 28;
$p2= new person('Faisal', 'Ahammed', 'Setu');
var_dump($p);

echo $p->fullname . '<br>';
echo $p->surname . '<br>';
echo $p->age . '<br>';

echo $p2->fullname . '<br>';
echo $p2->surname . '<br>';
echo $p2->age . '<br>';

echo "Hello, My Full name is $p->fullname, surname is $p->surname and my age is $p->age.  ";
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter