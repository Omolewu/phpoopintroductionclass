<?php
class Car
{
    public $name;
    private $color;
    protected $lifespan;
    static $maxspeed;
    public function  __construct($color, $name)
    {
        echo "The OOP favourite color is $color and name is $name <br/> ";
    }
    public function  __destruct()
    {


        echo "I'm PHP OOP Destructor<br/>";
    }
    public function set_name($name)
    {
        $this->name = "This the name of the car you ordered " .  strtoupper($name);
    }

    public function get_name()
    {
        return $this->name;
    }
}

// Object declaration

$volvo = new Car("Blue", "OOP");
$volvo->set_name('Volvo');
echo $volvo->get_name() . "<br/>";
$toyota = new Car("Red", "Object Oriented Programming");
$toyota->set_name('Toyota');
echo $toyota->get_name();




//echo $volvo->color . "<br/>"; // we can not accessed private property outside the class
//echo $volvo->lifespan . "<br/>"; // protected property can not be accessed outside the class except inside main class and child class
// echo Car::$maxspeed;
