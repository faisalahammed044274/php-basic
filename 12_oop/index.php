<?php

// What is class and instance
require_once "person.php";
require_once "student.php";

$student = new Student("Brad", "Hussy", 4);

$p = new Person("Faisal", "Setu");
$p->setAge(30);

var_dump($p);
echo $p->getAge();


$p2 = new Person("Araf", "uddin");

var_dump($p2);
// echo Person::$counter;
echo Person::getCounter();

var_dump($student);








// Create Person class in Person.php

// Create instance of Person

// Using setter and getter