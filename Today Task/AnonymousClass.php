<!-- Anonymous classes in PHP are classes that are defined 
without a name and are typically used for short-term purposes. -->

<?php
$user = new class ("Aashish", 20){
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getname() {
        return $this->name;
    }

    public function getage() {
        return $this->age;
    }
};

echo "The name is:" .$user->getname();
echo "<br>";
echo "The age is:" .$user->getage();

?>