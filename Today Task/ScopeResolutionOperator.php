<!-- scope resolution operator (::) allows to access to static, 
constant, and overridden properties or method of the class. 
-->

<!-- defining constant within the class -->
<?php
class firstClass {
    const EXAMPLE = "The constant can not be changed.";
} 
 $a = firstClass::EXAMPLE;
 echo $a ."<br>";
?>

<?php
class demo{
  
    public static $number=50;
  
    public static function func(){
  
        echo static::$number;
    }
}
  
class Child extends demo{
  
    public static $number=100;
  
}  
demo::func(); 
echo "<br>";

Child::func();
echo "<br>";


?>

<?php
class first {
    const EXAMPLE = "The constant can not be changed";

    public static function test(){
        $testing = "This is the testing";
        return $testing;
    }
}

class second extends first {
    public static $staticProperty = "This is the static properties";

    //methos
    public static function secondtest(){
        echo parent::EXAMPLE ."<br>"; //print the parent class constant i.e. example
        echo self::$staticProperty; //self is used to print the same class variable i.e. staticProperty.
    }
}

$b = second::secondtest();
echo $b;
?>
