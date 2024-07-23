<?php

abstract class Animal
{

    //abstract method
    abstract public function makeSound();

    //concrete method
    public function describe()
    {
        echo "This is an animal.";
        echo "<br>";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "The Dog Barks!!.";
        echo "<br>";
    }
}
$dog = new Dog();
$dog->describe();
$dog->makeSound();

?>

<?php
abstract class ShapeOfDiagram
{

    //abstract method
    abstract public function area();
    abstract public function perimeter();
}

class Rectangle extends ShapeOfDiagram
{

    private $length;
    private $breadth;

    public function __construct($length, $breadth)
    {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function area()
    {
        echo $this->length * $this->breadth;
    }

    public function perimeter()
    {
        echo 2 * ($this->length + $this->breadth);
    }
}

$rectangle = new Rectangle(5, 10);
$rectangle->area();
echo "<br>";
$rectangle->perimeter();


?>