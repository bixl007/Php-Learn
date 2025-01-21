<?php

class Car
{
    public $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$car = new Car();
$car->setColor("Red");
echo $car->getColor() , "<br>";
$car->setColor("Blue");
echo $car->getColor();

?>