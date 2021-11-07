<?php
class Person{
    public $name;

    public $surname;

    //private ?int $age; // it cannot access from another file
    protected ?int $age;

    public static int $counter = 0;

    public function __construct($name, $surname)
    {
        // echo $name . ' ' . $surname;
        $this->name  = $name;
        $this->surname = $surname; 
        $this->age = null; 
        self::$counter++; 
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public static function getCounter() {
        return self::$counter;
    }





}


?>