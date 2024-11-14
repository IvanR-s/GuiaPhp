<?php
class Person {
    public $name;
    public $age;

    public function greet() {
        return "Hello, my name is " . $this->name;
    }
}

$person = new Person();
$person->name = "Iván";
echo $person->greet();
?>
